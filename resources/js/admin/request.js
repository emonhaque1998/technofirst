import axios from "axios";
import Swal from "sweetalert2";


const websiteInformationForm = document.querySelector("#brand_logo_form");
const footerInformationForm = document.querySelector("#footer_information_form");

if(websiteInformationForm){
    websiteInformationForm.addEventListener("submit", async (e)=>{
        e.preventDefault();
        const fromData = new FormData();

        const mobileNumber = document.querySelector("#mobileNumber");
        const emailAddress = document.querySelector("#emailAdd");
        const logoFile = document.querySelector("#brand_logo_input");

        fromData.append("mobile", mobileNumber.value);

        fromData.append("email", emailAddress.value);
        fromData.append("image", logoFile.files[0])

        if(!mobileNumber.value || !emailAddress.value || !logoFile.files[0]){
            Swal.fire({
                title: "Something wrong!",
                text: "Please Fill this form",
                icon: "error"
              });

              return;
        }


        const requeustData = await axios.post("/dashboard/website-base/website-information", fromData);

        if(requeustData.data.success){
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: requeustData.data.message,
                showConfirmButton: false,
                toast: true,
                timer: 1500
              });

        }

    })
}

// Footer information
if(footerInformationForm){
    footerInformationForm.addEventListener("submit", async (e)=>{
        e.preventDefault();
        const catchData = new FormData(footerInformationForm);
        const requeustData = await axios.post("/dashboard/website-base/website-information", catchData);
        console.log(requeustData);
    })
}

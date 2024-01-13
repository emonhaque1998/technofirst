import axios from "axios";
import Swal from "sweetalert2";

const websiteInformationForm = document.querySelector("#brand_logo_form");
const footerInformationForm = document.querySelector(
    "#footer_information_form"
);

if (websiteInformationForm) {
    websiteInformationForm.addEventListener("submit", async (e) => {
        e.preventDefault();
        const fromData = new FormData(websiteInformationForm);

        try {
            const requeustData = await axios.post(
                "/dashboard/website-base/website-information",
                fromData
            );

            if (requeustData.data) {
                Swal.fire({
                    position: "top-end",
                    icon: requeustData.data.success ? "success" : "error",
                    title: requeustData.data.message,
                    showConfirmButton: false,
                    toast: true,
                    timer: 1500,
                });
            }
        } catch (error) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: error.response.data.message,
                showConfirmButton: false,
                toast: true,
                timer: 1500,
            });
        }
    });
}

// Footer information
if (footerInformationForm) {
    footerInformationForm.addEventListener("submit", async (e) => {
        e.preventDefault();
        const catchData = new FormData(footerInformationForm);
        try {
            const requeustData = await axios.post(
                "/dashboard/website-base/footer-information",
                catchData
            );
            if (requeustData.data) {
                Swal.fire({
                    position: "top-end",
                    icon: requeustData.data.success ? "success" : "error",
                    title: requeustData.data.message,
                    showConfirmButton: false,
                    toast: true,
                    timer: 1500,
                });
            }
        } catch (error) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: error.response.data.message,
                showConfirmButton: false,
                toast: true,
                timer: 1500,
            });
        }
    });
}

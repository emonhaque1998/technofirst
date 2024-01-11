import "./request";
import "./pusher";

// Logout system backend post from submit
const signOutBtn = document.querySelector("#signOut");

if (signOutBtn) {
    signOutBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const logoutFrom = document.querySelector("#logout-form");
        logoutFrom.submit();
    });
}

// After Finish Logout sytem backend post from submit

//Logo upload automostion system
const brandLogo = document.querySelector("#band_logo");
const brandLogoInput = document.querySelector("#brand_logo_input");

if (brandLogo) {
    brandLogo.addEventListener("click", (e) => {
        e.preventDefault();
        brandLogoInput.click();
    });
}

if (brandLogoInput) {
    brandLogoInput.addEventListener("change", (e) => {
        e.preventDefault();
        const brandLogoSrc = document.querySelector("#brand_logo_src");
        const reader = new FileReader();
        reader.onload = function () {
            brandLogoSrc.style.backgroundImage = `url(${reader.result})`;
        };
        reader.readAsDataURL(e.target.files[0]);
    });
}

//End Logo upload automostion system

export const stickyMenu = () => {
    const menuElement = document.querySelector(".menu-bar");

    const scrollPosition = window.scrollY

    if (scrollPosition > 100) {
        menuElement.classList.add('menu-bar-stick');
    } else {
        menuElement.classList.remove('menu-bar-stick');

    }

}
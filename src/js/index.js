// import * as bootstrap from 'bootstrap'
import "bootstrap"

import "../styles/scss/main.scss"

import './slider/index';

import {dom, library} from '@fortawesome/fontawesome-svg-core'
import {fas} from '@fortawesome/free-solid-svg-icons'
import {far} from '@fortawesome/free-regular-svg-icons'
import {fab} from '@fortawesome/free-brands-svg-icons'
import {stickyMenu} from "./stickyMenu";

library.add(fab, far, fas)

dom.i2svg()


window.addEventListener("scroll", () => {
    stickyMenu();
});
window.addEventListener("touchmove", () => {
    stickyMenu();
});

require('./bootstrap');

import {createApp} from "vue";      // vue könyvtárból creatApp függvény importálása
import VueAxios from "vue-axios";   // VueAxios vue plugin importálása
import axios from "axios";          // axios könyvtár importálása

import App from './vue.js';         // vue.js fájlban létrehozott objektum importálása
                                    // leírja, milyen komponenseket használ a Vue Instance
const app = createApp(App);         // Vue Instance-t (applikáció) létrehozzuk
app.use(VueAxios, axios);           // beállítjuk a létrehozott Instance-nak a VueAxios plugint
app.mount("#app");      // hozzá csatoljuk egy adott id-jú HTML tag-hez az Instance-t

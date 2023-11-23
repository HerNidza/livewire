import './bootstrap';
import axios from "axios";
import Alpine from 'alpinejs';
import morph from '@alpinejs/morph';

window.Alpine = Alpine
Alpine.plugin(morph)
Alpine.start()
window.axios = axios;

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Administrator UI</title>
  <style>
    /**
* Template Name: Restaurantly
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: "Open Sans", sans-serif;
  background: #0c0b09;
  color: #fff;

}

a {
  color: #cda45e;
  text-decoration: none;
}

a:hover {
  color: #d9ba85;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Playfair Display", serif;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #1a1814;
}

#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #1a1814;
  border-top-color: #cda45e;
  border-bottom-color: #cda45e;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: animate-preloader 1s linear infinite;
}

@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 996;
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
  border: 2px solid #cda45e;
}

.back-to-top i {
  font-size: 28px;
  color: #cda45e;
  line-height: 0;
}

.back-to-top:hover {
  background: #cda45e;
  color: #1a1814;
}

.back-to-top:hover i {
  color: #444444;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Top Bar
--------------------------------------------------------------*/
#topbar {
  height: 40px;
  font-size: 14px;
  transition: all 0.5s;
  z-index: 996;
}

#topbar.topbar-scrolled {
  top: -40px;
}

#topbar .contact-info i {
  font-style: normal;
  color: #d9ba85;
}

#topbar .contact-info i span {
  padding-left: 5px;
  color: #fff;
}

#topbar .languages ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  color: #cda45e;
}

#topbar .languages ul a {
  color: white;
}

#topbar .languages ul li+li {
  padding-left: 10px;
}

#topbar .languages ul li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: rgba(255, 255, 255, 0.5);
  content: "/";
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  background: rgba(0, 0, 0, 0.6);
  border-bottom: 1px solid rgba(12, 11, 9, 0.6);
  transition: all 0.5s;
  z-index: 997;
  padding: 15px 0;
  top: 40px;
}

#header.header-scrolled {
  top: 0;
  background: rgba(0, 0, 0, 0.85);
  border-bottom: 1px solid #37332a;
}

#header .logo {
  font-size: 28px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 300;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
}

#header .logo a {
  color: #fff;
}

#header .logo img {
  max-height: 40px;
}

/*--------------------------------------------------------------
# Book a table button Menu
--------------------------------------------------------------*/
.book-a-table-btn {
  margin: 0 0 0 15px;
  border: 2px solid #cda45e;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
}

.book-a-table-btn:hover {
  background: #cda45e;
  color: #fff;
}

@media (max-width: 992px) {
  .book-a-table-btn {
    margin: 0 15px 0 0;
    padding: 8px 20px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
  
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  color: #fff;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #d9ba85;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
  border-radius: 4px;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  color: #444444;
}

.navbar .dropdown ul a i {
  font-size: 12px;
  
}



.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #cda45e;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  border-radius: 6px;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #1a1814;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #cda45e;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #cda45e;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("../img/hero-bg.jpg") top center;
  background-size: cover;
  position: relative;
  padding: 0;
}

#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .container {
  padding-top: 110px;
}

@media (max-width: 992px) {
  #hero .container {
    padding-top: 98px;
  }
}

#hero h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#hero h1 span {
  color: #cda45e;
}

#hero h2 {
  color: #eee;
  margin-bottom: 10px 0 0 0;
  font-size: 22px;
}

#hero .btns {
  margin-top: 30px;
}

.btn-menu,
.btn-book {
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  border: 2px solid #cda45e;
}

.btn-menu:hover,
.btn-book:hover {
  background: #cda45e;
  color: #fff;
}

#hero .btn-book {
  margin-left: 15px;
}

#hero .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#cda45e 50%, rgba(205, 164, 94, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: relative;
  overflow: hidden;
}

#hero .play-btn::after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

#hero .play-btn::before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  animation-delay: 0s;
  animation: pulsate-btn 2s;
  animation-direction: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(205, 164, 94, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

#hero .play-btn:hover::after {
  border-left: 15px solid #cda45e;
  transform: scale(20);
}

#hero .play-btn:hover::before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  animation: none;
  border-radius: 0;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 992px) {
  #hero .play-btn {
    margin-top: 30px;
  }
}

@media (max-height: 500px) {
  #hero {
    height: auto;
  }

  #hero .container {
    padding-top: 130px;
    padding-bottom: 60px;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }

  #hero h2 {
    font-size: 18px;
    line-height: 24px;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 6px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #1a1814;
}

.section-title {
  padding-bottom: 10px;
}

.section-title h2 {
  font-size: 22px;
  font-weight: 500;
  padding: 0;
  line-height: 1px;
  margin: 0 0 5px 0;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #aaaaaa;
  font-family: "Poppins", sans-serif;
}

.section-title h2::after {
  content: "";
  width: 120px;
  height: 1px;
  display: inline-block;
  background: rgba(255, 255, 255, 0.2);
  margin: 4px 10px;
}

.section-title p {
  margin: 0;
  margin: 0;
  font-size: 36px;
  font-weight: 700;
  font-family: "Playfair Display", serif;
  color: #cda45e;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: #1d1b16;
  margin-top: 110px;
}

@media (max-width: 992px) {
  .breadcrumbs {
    margin-top: 98px;
  }
}

.breadcrumbs h2 {
  font-size: 26px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #37332a;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about {
  background: url("../img/about-bg.jpg") center center;
  background-size: cover;
  position: relative;
  padding: 80px 0;
}

.about:before {
  content: "";
  background: rgba(0, 0, 0, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

.about .about-img {
  position: relative;
  transition: 0.5s;
}

.about .about-img img {
  max-width: 100%;
  border: 4px solid rgba(255, 255, 255, 0.2);
  position: relative;
}

.about .about-img::before {
  position: absolute;
  left: 20px;
  top: 20px;
  width: 60px;
  height: 60px;
  z-index: 1;
  content: "";
  border-left: 5px solid #cda45e;
  border-top: 5px solid #cda45e;
  transition: 0.5s;
}

.about .about-img::after {
  position: absolute;
  right: 20px;
  bottom: 20px;
  width: 60px;
  height: 60px;
  z-index: 2;
  content: "";
  border-right: 5px solid #cda45e;
  border-bottom: 5px solid #cda45e;
  transition: 0.5s;
}

.about .about-img:hover {
  transform: scale(1.03);
}

.about .about-img:hover::before {
  left: 10px;
  top: 10px;
}

.about .about-img:hover::after {
  right: 10px;
  bottom: 10px;
}

.about .content h3 {
  font-weight: 600;
  font-size: 26px;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding-bottom: 10px;
}

.about .content ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #cda45e;
}

.about .content p:last-child {
  margin-bottom: 0;
}

@media (min-width: 1024px) {
  .about {
    background-attachment: fixed;
  }
}

/*--------------------------------------------------------------
# Why Us
--------------------------------------------------------------*/
.why-us .box {
  padding: 50px 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: all ease-in-out 0.3s;
  background: #1a1814;
}

.why-us .box span {
  display: block;
  font-size: 28px;
  font-weight: 700;
  color: #cda45e;
}

.why-us .box h4 {
  font-size: 24px;
  font-weight: 600;
  padding: 0;
  margin: 20px 0;
  color: rgba(255, 255, 255, 0.8);
}

.why-us .box p {
  color: #aaaaaa;
  font-size: 15px;
  margin: 0;
  padding: 0;
}

.why-us .box:hover {
  background: #cda45e;
  padding: 30px 30px 70px 30px;
  box-shadow: 10px 15px 30px rgba(0, 0, 0, 0.18);
}

.why-us .box:hover span,
.why-us .box:hover h4,
.why-us .box:hover p {
  color: #fff;
}

/*--------------------------------------------------------------
# Menu Section
--------------------------------------------------------------*/
.menu #menu-flters {
  padding: 0;
  margin: 0 auto 0 auto;
  list-style: none;
  text-align: center;
  border-radius: 50px;
}

.menu #menu-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 12px 10px 12px;
  font-size: 16px;
  font-weight: 500;
  line-height: 1;
  color: #fff;
  margin-bottom: 10px;
  transition: all ease-in-out 0.3s;
  border-radius: 50px;
  font-family: "Playfair Display", serif;
}

.menu #menu-flters li:hover,
.menu #menu-flters li.filter-active {
  color: #cda45e;
}

.menu #menu-flters li:last-child {
  margin-right: 0;
}

.menu .menu-item {
  margin-top: 50px;
}

.menu .menu-img {
  width: 70px;
  border-radius: 50%;
  float: left;
  border: 5px solid rgba(255, 255, 255, 0.2);
}

.menu .menu-content {
  margin-left: 85px;
  overflow: hidden;
  display: flex;
  justify-content: space-between;
  position: relative;
}

.menu .menu-content::after {
 
  position: absolute;
  left: 20px;
  right: 0;
  top: -4px;
  z-index: 1;
  color: #bab3a6;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
}

.menu .menu-content a {
  padding-right: 10px;
  background: #1a1814;
  position: relative;
  z-index: 3;
  font-weight: 700;
  color: white;
  text-decoration:none;
  transition: 0.3s;
}



.menu .menu-content a:hover {
  color: white;
}

.menu .menu-content span {
  background: #1a1814;
  position: relative;
  z-index: 3;
  padding: 0 10px;
  font-weight: 600;
  color: #cda45e;
}

.menu .menu-ingredients {
  margin-left: 85px;
  font-style: italic;
  font-size: 14px;
  font-family: "Poppins", sans-serif;
  color: rgba(255, 255, 255, 0.5);
}

/*--------------------------------------------------------------
# Specials
--------------------------------------------------------------*/
.specials {
  overflow: hidden;
}

.specials .nav-tabs {
  border: 0;
}

.specials .nav-link {
  border: 0;
  padding: 12px 15px;
  transition: 0.3s;
  color: #fff;
  border-radius: 0;
  border-right: 2px solid #cda45e;
  font-weight: 600;
  font-size: 15px;
}

.specials .nav-link:hover {
  color: #cda45e;
}

.specials .nav-link.active {
  color: #1a1814;
  background: #cda45e;
  border-color: #cda45e;
}

.specials .nav-link:hover {
  border-color: #cda45e;
}

.specials .tab-pane.active {
  animation: fadeIn 0.5s ease-out;
}

.specials .details h3 {
  font-size: 26px;
  font-weight: 600;
  margin-bottom: 20px;
  color: #fff;
}

.specials .details p {
  color: #aaaaaa;
}

.specials .details p:last-child {
  margin-bottom: 0;
}

@media (max-width: 992px) {
  .specials .nav-link {
    border: 0;
    padding: 15px;
  }
}

/*--------------------------------------------------------------
# Events
--------------------------------------------------------------*/
.events {
  background: url(../img/events-bg.jpg) center center no-repeat;
  background-size: cover;
  position: relative;
}

.events::before {
  content: "";
  background-color: rgba(0, 0, 0, 0.8);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

.events .section-title h2 {
  color: #fff;
}

.events .container {
  position: relative;
}

@media (min-width: 1024px) {
  .events {
    background-attachment: fixed;
  }
}

.events .events-carousel {
  background: rgba(255, 255, 255, 0.08);
  padding: 30px;
}

.events .event-item {
  color: #fff;
}

.events .event-item h3 {
  font-weight: 600;
  font-size: 26px;
  color: #cda45e;
}

.events .event-item .price {
  font-size: 26px;
  font-family: "Open Sans", sans-serif;
  font-weight: 700;
  margin-bottom: 15px;
}

.events .event-item .price span {
  border-bottom: 2px solid #cda45e;
}

.events .event-item ul {
  list-style: none;
  padding: 0;
}

.events .event-item ul li {
  padding-bottom: 10px;
}

.events .event-item ul i {
  font-size: 20px;
  padding-right: 4px;
  color: #cda45e;
}

.events .event-item p:last-child {
  margin-bottom: 0;
}

.events .swiper-pagination {
  margin-top: 30px;
  position: relative;
}

.events .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.4);
  opacity: 1;
}

.events .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #cda45e;
}

/*--------------------------------------------------------------
# Book A Table
--------------------------------------------------------------*/
.book-a-table .php-email-form {
  width: 100%;
}

.book-a-table .php-email-form .form-group {
  padding-bottom: 8px;
}

.book-a-table .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.book-a-table .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.book-a-table .php-email-form .error-message br+br {
  margin-top: 25px;
}

.book-a-table .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.book-a-table .php-email-form .loading {
  display: none;
  text-align: center;
  padding: 15px;
}

.book-a-table .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #cda45e;
  border-top-color: #1a1814;
  animation: animate-loading 1s linear infinite;
}

.book-a-table .php-email-form input,
.book-a-table .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;
}

.book-a-table .php-email-form input::-moz-placeholder,
.book-a-table .php-email-form textarea::-moz-placeholder {
  color: #a49b89;
}

.book-a-table .php-email-form input::placeholder,
.book-a-table .php-email-form textarea::placeholder {
  color: #a49b89;
}

.book-a-table .php-email-form input:focus,
.book-a-table .php-email-form textarea:focus {
  border-color: #cda45e;
}

.book-a-table .php-email-form input {
  height: 44px;
}

.book-a-table .php-email-form textarea {
  padding: 10px 12px;
}

.book-a-table .php-email-form button[type=submit] {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.book-a-table .php-email-form button[type=submit]:hover {
  background: #d3af71;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  min-height: 320px;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 50%;
  margin: -40px 0 0 40px;
  position: relative;
  z-index: 2;
  border: 6px solid rgba(255, 255, 255, 0.2);
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 45px;
  color: white;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: rgba(255, 255, 255, 0.6);
  margin: 0 0 0 45px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: #d3af71;
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 0 15px 0 15px;
  padding: 20px 20px 60px 20px;
  background: #26231d;
  position: relative;
  border-radius: 6px;
  position: relative;
  z-index: 1;
}

.testimonials .swiper-pagination {
  margin-top: 30px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: rgba(255, 255, 255, 0.4);
  opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #cda45e;
}

/*--------------------------------------------------------------
# Gallery
--------------------------------------------------------------*/
.gallery .gallery-item {
  overflow: hidden;
  border-right: 3px solid #454035;
  border-bottom: 3px solid #454035;
}

.gallery .gallery-item img {
  transition: all ease-in-out 0.4s;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Chefs
--------------------------------------------------------------*/
.chefs .member {
  text-align: center;
  margin-bottom: 20px;
  background: #343a40;
  position: relative;
  overflow: hidden;
}

.chefs .member .member-info {
  opacity: 0;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  transition: 0.2s;
}

.chefs .member .member-info-content {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 10px;
  transition: bottom 0.4s;
}

.chefs .member .member-info-content h4 {
  font-weight: 700;
  margin-bottom: 2px;
  font-size: 18px;
  color: #fff;
}

.chefs .member .member-info-content span {
  font-style: italic;
  display: block;
  font-size: 13px;
  color: #fff;
}

.chefs .member .social {
  position: absolute;
  left: 0;
  bottom: -38px;
  right: 0;
  height: 48px;
  transition: bottom ease-in-out 0.4s;
  text-align: center;
}

.chefs .member .social a {
  transition: color 0.3s;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
}

.chefs .member .social a:hover {
  color: #cda45e;
}

.chefs .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

.chefs .member:hover .member-info {
  background: linear-gradient(0deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.8) 20%, rgba(0, 212, 255, 0) 100%);
  opacity: 1;
  transition: 0.4s;
}

.chefs .member:hover .member-info-content {
  bottom: 60px;
  transition: bottom 0.4s;
}

.chefs .member:hover .social {
  bottom: 0;
  transition: bottom ease-in-out 0.4s;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info {
  width: 100%;
}

.contact .info i {
  font-size: 20px;
  float: left;
  width: 44px;
  height: 44px;
  background: #cda45e;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 18px;
  font-weight: 500;
  margin-bottom: 5px;
  font-family: "Poppins", sans-serif;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #bab3a6;
}

.contact .info .open-hours,
.contact .info .email,
.contact .info .phone {
  margin-top: 40px;
}

.contact .php-email-form {
  width: 100%;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #cda45e;
  border-top-color: #1a1814;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;
}

.contact .php-email-form input::-moz-placeholder,
.contact .php-email-form textarea::-moz-placeholder {
  color: #a49b89;
}

.contact .php-email-form input::placeholder,
.contact .php-email-form textarea::placeholder {
  color: #a49b89;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: #cda45e;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #d3af71;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: black;
  padding: 0 0 30px 0;
  color: #fff;
  font-size: 14px;
}

#footer .footer-top {
  background: #0c0b09;
  border-top: 1px solid #37332a;
  border-bottom: 1px solid #28251f;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 24px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-weight: 300;
  text-transform: uppercase;
  font-family: "Poppins", sans-serif;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Playfair Display", serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #28251f;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #cda45e;
  color: #fff;
  text-decoration: none;
}

#footer .footer-top h4 {
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  position: relative;
  padding-bottom: 12px;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 2px;
  color: #cda45e;
  font-size: 18px;
  line-height: 1;
}

#footer .footer-top .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #fff;
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

#footer .footer-top .footer-links ul a:hover {
  color: #cda45e;
}

#footer .footer-top .footer-newsletter form {
  margin-top: 30px;
  background: #28251f;
  padding: 6px 10px;
  position: relative;
  border-radius: 50px;
  border: 1px solid #454035;
}

#footer .footer-top .footer-newsletter form input[type=email] {
  border: 0;
  padding: 4px;
  width: calc(100% - 110px);
  background: #28251f;
  color: white;
}

#footer .footer-top .footer-newsletter form input[type=submit] {
  position: absolute;
  top: -1px;
  right: -1px;
  bottom: -1px;
  border: 0;
  background: none;
  font-size: 16px;
  padding: 0 20px 2px 20px;
  background: #cda45e;
  color: #fff;
  transition: 0.3s;
  border-radius: 50px;
}

#footer .footer-top .footer-newsletter form input[type=submit]:hover {
  background: #d3af71;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  padding-top: 10px;
  text-align: center;
  font-size: 13px;
  color: #fff;
}

content
 {
  height: 100%;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.centered-div {
  width: 900px;
  height: 1090px;
  background: rgba(0, 0, 0, 0.95);
  border-radius: 10px;
  padding: 20px;
  margin-top: 50px; /* Adjust the distance from the top */
}

.nb{
background:rgba(36, 36, 36, 0.95);

}

label{
  color:#cda45e;
  transition:0.5s;

}
label:hover{
  color:white;
}

form{
  color:inherit;
  font-weight: 700;
}
form p{
  color:#cda45a;
  font-weight: 700;
}

button{
  background-color: #0c0b09;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  border: 2px solid #cda45e;
}

button:hover
 {
  background: #cda45e;
  color: #fff;}

  textarea{
  background: black;
  border-radius: 10px;
  border: 2px solid #cda45e;
  color:#cda45e;
  width:400px;
  height:300px;
}



table{
        background:black;
        margin-left:40px;
        margin-top:20px;
        height:400px;
        width:750px;
        border: 2px solid #cda45c;
        border-radius:10px;
        

        font-family: "Open Sans", sans-serif;
    }
    
    th{
        padding:10px;
        border:3px solid rgba(25,25,25,0.999);
        color:white;
    }
    td{
      padding:10px;
      border:3px solid rgba(25,25,25,0.999);
      
    }

.make{
    background-color: #0c0b09;
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: white;
  border: 2px solid #cda45e;

}

.make:hover{
   
  background: #cda45e;
  color: #fff;
 
}



  </style>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File 
 / <link href="assets/css/style.css" rel="stylesheet">-->

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  
</head>

<body style="background:rgba(25,25,25,0.96)">
  <header id="header" class="d-flex align-items-center" style="background: background:rgba(25,25,25,0.96);">
		<div class="container d-flex align-items-center justify-content-between" >
	
		  <h1 class="logo"><a href="index.html"></a></h1>
		  <!-- Uncomment below if you prefer to use an image logo -->
		  <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	
	  <!-- ======= Header ======= -->
	  
		  <nav id="navbar" class="navbar">
			<ul>
			  <li><a class="nav-link scrollto active" href="../index.html">Order</a></li>
			  <!--<li><a class="nav-link scrollto" href="#about">About</a></li>-->
			  
			  <li><a class="nav-link scrscrolltoollto" href="oncetheadminhaslogin/index.html">Jobs</a></li>
			  
			  <li class="dropdown"><a href="#"><span><img src="assets/img/menu/icon.jpg" style=" height:20px; width:20px;"></span></a>
				<ul>
				  <li><a href="#" style="text-decoration:none;">Notifications</a></li>
				  <li><a href="#" style="text-decoration:none;">Settings</a></li>
					<li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-responsive-nav-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-responsive-nav-link>
          </form>
          </li>					
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		  </nav><!-- .navbar -->
	
		</div>
	  </header><!-- End Header -->

	


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg" style="background:rgba(2.5,2.5,2.5,0.96)">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
               

    </section><!-- End Events Section -->
   <main >
    <center>
    <div class="content">
      <div class="centered-div">
<!-- ======= Menu Section ======= -->

<!--<section id="menu" class="menu section-bg">
  <div class="container" data-aos="fade-up">
       <div class="row menu-container" data-aos="fade-up" data-aos-delay="200" >
        <div class="col-lg-6 menu-item filter-starters">
        <a href="index.html" class="back-to-list"><i class="bi bi-arrow-left-short"></i></a>
        <img src="assets2/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="machiyacust.html" style="color:#cda45e">Machiya</a>
         </div>                          
        </div>
      </div>-->
    
<!-- End Events Section -->
<section id="menu" class="menu section-bg" style="background:black;">
  <div class="container" data-aos="fade-up">
<div class="row menu-container" data-aos="fade-up" data-aos-delay="200" >
<div class="col-lg-6 menu-item filter-starters">
  @forelse($orders as $order)
          <img src="assets/img/menu/pri.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Printing Category</a>
            <span>
              <a href="" style="color:#cda45e">{{ $order->field1 }}</a>
              
            </span>
          </div>
         
        </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="assets/img/menu/bread-barrel.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Printing Type</a>
            <span>
              <a href="" style="color:#cda45e">{{ $order->field2 }}</a>
            </span>
          </div>
         
        </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="assets/img/menu/cake.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Material</a>
            <span>
              <a href="" style="color:#cda45e">{{ $order->field3 }}</a>
            </span>
              
            
          </div>
          </div>

        <div class="col-lg-6 menu-item filter-salads">
          <img src="assets/img/menu/caesar.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Weight(g)</a>
            <span>
              <a href="" style="color:#cda45e">{{ $order->field4 }}</a> 
            </span>
          </div>
          </div>

        <div class="col-lg-6 menu-item filter-specialty">
          <img src="assets/img/menu/tuscan-grilled.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Size</a>
            <span>
              <a href="" style="color:#cda45e">{{ $order->field5 }}</a>
            </span>
          </div>
          </div>

        <div class="col-lg-6 menu-item filter-starters">
          <img src="assets/img/menu/mozzarella.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Number of copies</a>
            <span>
              <a href="" style="color:#cda45e">{{ $order->field6 }}</a>
           </select>
           </span>
           
              </div>
            </span>
          </div>
          
        </div>
       

        <div class="col-lg-6 menu-item filter-starters">
          <img src="assets/img/menu/p.jpg" style="height:80px; width:80px;" class="menu-img" alt="">
          <div class="menu-content">
            <a href="#">Description made by Customer</a>
            <div style="border:solid 2px #cda45a; height:1000px width:1000px; border-radius:5%;">
            <span  >
              <a href="" style="color:#cda45e">{{ $order->detail }}</a>
           </select>
           </span>
          </div>
           
              </div>
            </span>
          </div>
          
        </div>
        @empty
    <p>No orders are made by the customer</p>
@endforelse
<br>
<br>
<a href="{{'customerAdminview'}}"><div class="make">Make Changes</div></a>  
        
  
 
        </div>
      </div>
    </div>
  </section>
  
        
        
      

    
  

</div>
</div>
    </center>
  </main><!-- End #main -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
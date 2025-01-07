<?php
include "config/config.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tecknify - Smart Ideas for your Brand are Here</title>
  <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<style>
    /*-----------------------------------*\
    #style.css
  \*-----------------------------------*/

    /**
  * copyright 2022 codewithsadee
  */

    /*-----------------------------------*\
    #CUSTOM PROPERTY
  \*-----------------------------------*/

    :root {
      /**
      * colors
      */
      --rich-black-fogra-29-1: hsl(215, 31%, 14%);
      --rich-black-fogra-29-2: hsl(230, 14%, 8%);
      --rich-black-fogra-39: hsl(158, 29%, 5%);
      --granite-gray: hsl(0, 0%, 40%);
      --primery_50: hsla(145, 63%, 42%, 0.5);
      --primery_8: hsl(253, 100%, 75%);
      --primery_5: hsla(145, 63%, 42%, 0.05);
      --light-gray: hsl(0, 0%, 80%);
      --mint-cream: hsl(255, 67%, 96%);
      --cultured: hsl(0, 0%, 93%);
      --primery: hsl(14, 100%, 50%);
      --white: hsl(0, 0%, 100%);
      --jet: hsl(0, 0%, 18%);


      /**
      * typography
      */

      --ff-poppins: "Poppins", sans-serif;
      --ff-cuprum: "Cuprum", sans-serif;

      --fs-1: 4.5rem;
      --fs-2: 3.6rem;
      --fs-3: 3.5rem;
      --fs-4: 3.2rem;
      --fs-5: 2.5rem;
      --fs-6: 2.4rem;
      --fs-7: 2.2rem;
      --fs-8: 2rem;
      --fs-9: 1.8rem;
      --fs-10: 1.5rem;
      --fs-11: 1.4rem;
      --fs-12: 1.3rem;

      --fw-600: 600;
      --fw-500: 500;

      /**
      * spacing
      */

      --section-padding: 80px;

      /**
      * shadow
      */

      --shadow-1: 3px 4px 30px hsla(0, 0%, 53%, 0.1);
      --shadow-2: 5px 3px 40px hsla(191, 100%, 17%, 0.1);

      /**
      * radius
      */

      --radius-5: 5px;

      /**
      * transition
      */

      --transition-1: 0.25s ease;
      --transition-2: 0.5s ease;
      --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);
    }

    /*-----------------------------------*\
      #RESET
    \*-----------------------------------*/

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    li {
      list-style: none;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    a,
    img,
    span,
    input,
    button,
    ion-icon {
      display: block;
    }

    img {
      height: auto;
    }

    input,
    button {
      background: none;
      border: none;
      font: inherit;
    }

    input {
      width: 100%;
    }

    button {
      cursor: pointer;
    }

    ion-icon {
      pointer-events: none;
    }

    address {
      font-style: normal;
    }

    html {
      font-family: var(--ff-poppins);
      font-size: 10px;
      scroll-behavior: smooth;
    }

    body {
      background-color: var(--white);
      color: var(--granite-gray);
      font-size: 1.6rem;
      line-height: 1.7;
    }

    :focus-visible {
      outline-offset: 4px;
    }

    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background-color: hsl(0, 0%, 98%);
    }

    ::-webkit-scrollbar-thumb {
      background-color: hsl(0, 0%, 80%);
    }

    ::-webkit-scrollbar-thumb:hover {
      background-color: hsl(0, 0%, 70%);
    }

    /*-----------------------------------*\
      #REUSED STYLE
    \*-----------------------------------*/

    .container {
      padding-inline: 15px;
    }

    .section {
      padding-block: var(--section-padding);
    }

    .has-before,
    .has-after {
      position: relative;
      z-index: 1;
    }

    .has-before::before,
    .has-after::after {
      content: "";
      position: absolute;
    }

    .h1,
    .h2,
    .h3,
    .h2-sm {
      color: var(--rich-black-fogra-29-1);
      font-family: var(--ff-cuprum);
    }

    .h1 {
      font-size: var(--fs-1);
      line-height: 1.1;
    }

    .h2 {
      font-size: var(--fs-2);
    }

    .h2,
    .h3,
    .h2-sm {
      line-height: 1.3;
    }

    .h2-sm {
      font-size: var(--fs-3);
    }

    .h3 {
      font-size: var(--fs-7);
    }

    .btn-group {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 35px;
    }

    .btn {
      font-weight: var(--fw-600);
      text-transform: uppercase;
      padding: 14px 28px;
      border-radius: var(--radius-5);
      max-width: max-content;
      background: linear-gradient(135deg,
          var(--primary-color),
          var(--secondary-color));
      color: var(--rich-black-fogra-29-1);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
      cursor: pointer;
      border: 1px solid var(--primery);
    }

    .btn:hover,
    .btn:focus {
      background: linear-gradient(135deg,
          var(--primary-color-hover),
          var(--lavender-gray));
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      transform: scale(1.05);
    }

    .btn-primary {
      font-weight: bold;
      text-transform: uppercase;
    }

    .flex-btn {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .img-holder {
      aspect-ratio: var(--width) / var(--height);
      background-color: var(--light-gray);
    }

    .img-cover {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .w-100 {
      width: 100%;
    }

    .text-center {
      text-align: center;
    }

    .section-subtitle {
      color: var(--primery);
      font-weight: var(--fw-500);
    }

    .grid-list {
      display: grid;
      gap: 20px;
    }

    .btn-link {
      color: var(--rich-black-fogra-29-1);
      font-size: var(--fs-12);
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 5px;
      transition: var(--transition-1);
    }

    /*-----------------------------------*\
      #HEADER
    \*-----------------------------------*/
    /* General Header Styles */
    .header {
      padding-block: 15px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 4;
      background-color: var(--white);
      box-shadow: var(--shadow-2);
      transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    }

    .header.scrolled {
      background-color: rgba(255, 255, 255, 0.95);
      /* Slightly transparent for desktop */
      box-shadow: var(--shadow-3);
      transform: translateY(-5px);
      /* Slight upward motion */
    }

    /* Ensure header background remains non-black on smaller screens */
    @media (max-width: 768px) {
      .header.scrolled {
        background-color: rgba(255, 255, 255, 0.95);
        /* Non-black for small screens */
        transform: none;
        /* Disable upward motion for simplicity */
      }
    }

    /* Container Styles */
    .header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Logo Styles */
    .logo {
      display: inline-block;
    }

    .logo img {
      display: block;
      width: 80px;
      /* Default size */
      height: auto;
      /* Maintain aspect ratio */
      transition: width 0.3s ease;
      /* Smooth resizing effect */
    }

    .header.scrolled .logo img {
      width: 70px;
      /* Smaller size when scrolled */
    }

    /* Navigation Menu Button */
    .nav-open-btn {
      color: var(--rich-black-fogra-29-1);
      font-size: 35px;
      cursor: pointer;
      display: none;
      /* Hide by default */
    }

    /* Navbar Styles */
    .navbar {
      position: fixed;
      top: 0;
      left: -280px;
      max-width: 280px;
      width: 100%;
      height: 100%;
      background-color: var(--rich-black-fogra-39);
      /* Always solid black */
      color: var(--white);
      padding: 30px 20px;
      visibility: hidden;
      transition: 0.25s ease;
      z-index: 4;
    }

    .navbar.active {
      visibility: visible;
      transform: translateX(280px);
      /* Slide in */
      transition-duration: 0.5s;
      background-color: var(--rich-black-fogra-39);
      /* Solid black when open */
    }

    /* Navbar background fix on smaller screens */
    @media (max-width: 768px) {

      .header.scrolled+.navbar,
      .header.scrolled .navbar {
        background-color: var(--rich-black-fogra-39);
        /* Ensure navbar is black */
      }
    }

    .navbar .wrapper {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 25px;
    }

    .navbar .logo img {
      width: 100px;
      /* Navbar-specific logo size */
    }

    .nav-close-btn {
      font-size: 30px;
      color: var(--white);
      cursor: pointer;
    }

    .navbar-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .navbar-link {
      display: block;
      color: var(--white);
      text-decoration: none;
      padding-block: 10px;
      font-size: 16px;
      font-weight: 500;
      transition: 0.3s ease;
    }

    .navbar-link:is(:hover, :focus) {
      color: var(--primary);
    }

    /* Overlay Styles */
    .overlay {
      position: fixed;
      inset: 0;
      background-color: hsla(0, 0%, 0%, 0.6);
      visibility: hidden;
      opacity: 0;
      transition: 0.3s ease;
      z-index: 3;
    }

    .overlay.active {
      visibility: visible;
      opacity: 1;
    }

    /* General Dropdown Styles */
    .dropdown {
      position: relative;
      font-family: 'Poppins', sans-serif;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      min-width: 200px;
      /* Increased width */
      list-style: none;
      margin: 10px 0;
      padding: 12px 15px;
      background: linear-gradient(145deg, #ffffff, #f3f3f3);
      /* Light modern gradient */
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
      /* Soft shadow for depth */
      border-radius: 12px;
      opacity: 0;
      visibility: hidden;
      transform: translateY(-10px);
      transition: opacity 0.3s ease, transform 0.3s ease, visibility 0.3s ease;
      z-index: 10;
    }

    .dropdown-menu .dropdown-link {
      display: block;
      color: var(--rich-black-fogra-29-1);
      text-decoration: none;
      padding: 10px 20px;
      font-size: 1.4rem;
      /* Modern typography size */
      font-weight: 500;
      transition: background-color 0.3s ease, transform 0.2s ease, color 0.3s ease;
      border-radius: 8px;
      margin: 5px 0;
    }

    .dropdown-menu .dropdown-link:is(:hover, :focus) {
      background: linear-gradient(145deg, var(--primary-light), var(--primary));
      color: var(--primery);
      transform: translateX(8px);
      /* Subtle hover movement */
    }

    /* Show dropdown with a smooth animation */
    .dropdown:hover .dropdown-menu,
    .dropdown-menu.active {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
      .nav-open-btn {
        display: block;
        /* Show the menu button */
      }

      .navbar {
        max-width: 240px;
        /* Reduce navbar width */
      }

      .navbar.active {
        background-color: var(--rich-black-fogra-39);
        /* Solid black for smaller screens */
      }

      .navbar .logo img {
        width: 90px;
        /* Smaller logo */
      }

      .navbar-link {
        font-size: 15px;
        /* Adjust font size */
      }

      .dropdown-menu {
        position: static;
        transform: none;
        opacity: 1;
        visibility: visible;
        padding-left: 20px;
      }
    }

    @media (max-width: 768px) {
      .logo img {
        width: 100px;
        /* Reduce logo size */
      }

      .navbar .logo img {
        width: 80px;
        /* Further reduce navbar logo size */
      }

      .navbar-link {
        font-size: 14px;
        /* Adjust font size for smaller screens */
      }

      .navbar.active {
        background-color: var(--rich-black-fogra-39);
        /* Maintain solid black background */
      }

      .dropdown-menu {
        position: relative;
        /* Ensure it's positioned within the parent element */
        width: 100%;
        /* Full width */
        margin: 0;
        padding: 10px 0;
        border-radius: 0;
        /* Remove rounded edges */
        box-shadow: none;
        /* Simplify for mobile */
        background: linear-gradient(135deg, #333, #222);
        /* Dark gradient for improved contrast */
        display: flex;
        /* Use flex for column layout */
        flex-direction: column;
        gap: 10px;
        /* Space between links */
      }

      .dropdown-menu .dropdown-link {
        font-size: 15px;
        /* Slightly larger font for readability */
        padding: 12px 20px;
        /* Adjust padding for better touch targets */
        border: none;
        /* Remove border */
        text-align: left;
        /* Ensure alignment */
        background-color: transparent;
        /* Default background */
        color: var(--white);
        transition: background-color 0.3s ease, padding-left 0.3s ease, transform 0.2s ease;
      }

      .dropdown-menu .dropdown-link:is(:hover, :focus) {
        background: rgba(255, 255, 255, 0.1);
        /* Subtle hover effect */
        color: var(--primary-light);
        /* Highlighted text */
        transform: scale(1.05);
        /* Slight enlargement for feedback */
      }

      /* Ensure the last item has no bottom margin */
      .dropdown-menu .dropdown-link:last-child {
        margin-bottom: 0;
      }

      /* Add icon or indicator for dropdown links with nested menus */
      .dropdown-link.has-children::after {
        content: '▸';
        /* Arrow symbol for nested dropdowns */
        font-size: 14px;
        margin-left: auto;
        /* Push to the end */
        color: var(--white);
      }

      /* Add nested dropdown menu styles */
      .dropdown-menu .dropdown-menu {
        position: static;
        /* Nested dropdowns stay inline */
        padding-left: 15px;
        /* Indentation for clarity */
        background: none;
        /* Transparent nested background */
        box-shadow: none;
        /* Remove shadow */
      }

    }



    @media (max-width: 480px) {
      .logo img {
        width: 80px;
        /* Reduce logo size for extra small screens */
      }

      .navbar {
        max-width: 220px;
        /* Further reduce navbar width */
      }

      .navbar.active {
        background-color: var(--rich-black-fogra-39);
        /* Ensure black background stays */
      }

      .navbar .logo img {
        width: 70px;
        /* Reduce navbar logo size further */
      }

      .navbar-link {
        font-size: 13px;
        /* Adjust link size */
      }

      .nav-open-btn {
        font-size: 30px;
        /* Slightly smaller menu button */
      }

      .nav-close-btn {
        font-size: 25px;
        /* Smaller close button */
      }

      .dropdown-menu .dropdown-link {
        font-size: 13px;
        padding: 10px 15px;
      }
    }

    /*-----------------------------------*\
      #HERO
    \*-----------------------------------*/
    .blog-container {
      width: 100%;
      max-width: 1200px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      margin: 109px auto;
    }

    .blog-title {
      font-size: 3.5rem;
      color: var(--rich-black-fogra-29-1);
      margin-bottom: 20px;
      text-align: center;
      font-family: var(--ff-cuprum);
    }

    .blog-image {
      width: 100%;
      max-height: 400px;
      border-radius: 10px;
      margin-bottom: 20px;
      object-fit: cover;
    }

    .blog-meta {
      font-size: 1.2rem;
      color: rgb(0, 0, 0);
      text-align: center;
      margin-bottom: 20px;
    }

    .blog-meta span {
      display: inline-block;
      margin-right: 10px;
    }

    .blog-content {
      font-size: 1.5rem;
      line-height: 1.8;
      text-align: justify;
      font-family: var(--ff-poppins);
      color: var(--rich-black-fogra-29-2);
    }

    .blog-content h2 {
      font-size: 2.2rem;
      color: var(--rich-black-fogra-29-1);
      margin-bottom: 10px;
      margin-top: 20px;
    }


    /*-----------------------------------*\
      #FOOTER
    \*-----------------------------------*/

    .footer {
      background-color: var(--rich-black-fogra-29-2);
      color: var(--cultured);
    }

    .footer-top .container {
      display: grid;
      gap: 40px;
    }

    .footer .logo {
      color: var(--white);
    }

    .footer-text {
      margin-block: 25px;
    }

    .newsletter-form {
      position: relative;
      max-width: 350px;
    }

    .email-field {
      color: var(--white);
      font-size: var(--fs-11);
      border: 1px solid var(--granite-gray);
      padding: 15px;
      border-radius: var(--radius-5);
    }

    .footer .form-btn {
      background-color: var(--primery);
      color: var(--white);
      font-size: 24px;
      position: absolute;
      top: 6px;
      right: 6px;
      bottom: 6px;
      padding-inline: 10px;
      border-radius: var(--radius-5);
    }

    .footer-list-title {
      font-family: var(--ff-cuprum);
      font-size: var(--fs-5);
      font-weight: var(--fw-600);
      line-height: 1.2;
      margin-block-end: 25px;
    }

    .footer-link {
      margin-block-start: 15px;
      transition: var(--transition-1);
    }

    .footer-link:is(:hover, :focus) {
      color: var(--primery);
    }

    .footer-item,
    .social-list {
      display: flex;
      align-items: flex-start;
      gap: 10px;
    }

    .footer-item {
      margin-block-start: 15px;
    }

    .footer-item>ion-icon {
      flex-shrink: 0;
      color: var(--primery);
      font-size: 20px;
      margin-block-start: 3px;
    }

    .contact-link {
      transition: var(--transition-1);
    }

    .contact-link:not(.address):is(:hover, :focus) {
      color: var(--primery);
    }

    .footer-item:last-child {
      margin-block-start: 25px;
      padding-block-start: 25px;
      border-block-start: 1px solid var(--granite-gray);
    }

    .social-link {
      font-size: 14px;
      border: 1px solid var(--granite-gray);
      padding: 10px;
      transition: var(--transition-1);
    }

    .social-link:is(:hover, :focus) {
      background-color: var(--primery);
      border-color: var(--primery);
    }

    .footer-bottom {
      padding-block: 15px;
      border-block-start: 1px solid var(--jet);
    }

    .copyright {
      font-size: var(--fs-12);
      text-align: center;
      margin-block-end: 15px;
    }

    .copyright-link {
      display: inline-block;
      color: var(--primery);
      font-weight: var(--fw-500);
    }

    .footer-bottom-list {
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .footer-bottom-link {
      font-size: var(--fs-11);
      transition: var(--transition-1);
    }

    .footer-bottom-link:is(:hover, :focus) {
      color: var(--primery);
    }

    /*-----------------------------------*\
      #MEDIA QUERIES 
    \*-----------------------------------*/

    /**
    * responsive for large than 575px screen
    */

    @media (min-width: 575px) {
      /**
      * CUSTOM PROPERTY
      */

      :root {
        /**
        * typography
        */

        --fs-1: 5.4rem;
      }

      /**
      * REUSED STYLE
      */

      .container {
        max-width: 540px;
        width: 100%;
        margin-inline: auto;
      }

      /**
      * HEADER
      */

      /* .header .container { max-width: unset; } */

      /**
      * SERVICE
      */

      .service .grid-list {
        grid-template-columns: 1fr 1fr;
      }

      .service-card {
        text-align: left;
      }

      .service-card .card-icon {
        margin-inline: 0;
      }

      .service-card .btn-link {
        justify-content: flex-start;
      }
    }

    /**
    * responsive for large than 768px screen
    */

    @media (min-width: 768px) {
      /**
      * CUSTOM PROPERTY
      */

      :root {
        /**
        * typography
        */

        --fs-1: 7rem;
        --fs-2: 4rem;
        --fs-4: 3.5rem;
      }

      /**
      * REUSED STYLE
      */

      .container {
        max-width: 720px;
      }

      .btn {
        padding: 16px 32px;
      }

      .section-text.text-center {
        max-width: 50ch;
        margin-inline: auto;
      }

      .btn-link {
        --fs-12: 1.4rem;
      }

      /**
      * HERO
      */

      .hero-subtitle {
        --fs-12: 1.4rem;
      }

      /**
      * FEATURES
      */

      .features .grid-list {
        grid-template-columns: 1fr 1fr;
      }

      /**
      * FOOTER
      */

      .footer-top .container {
        grid-template-columns: 1fr 1fr;
      }
    }

    /**
    * responsive for large than 992px screen
    */

    @media (min-width: 992px) {
      /**
      * REUSED STYLE
      */

      .container {
        max-width: 960px;
      }

      /**
      * HEADER
      */

      .nav-open-btn,
      .navbar .wrapper,
      .overlay {
        display: none;
      }

      .header {
        padding: 20px;
      }

      .navbar,
      .navbar.active {
        all: unset;
      }

      .navbar-list {
        display: flex;
        gap: 40px;
      }

      .navbar-link {
        color: var(--rich-black-fogra-29-1);
        font-weight: var(--fw-500);
        padding-block: 0;
      }

      .header .btn-outline {
        display: block;
        color: var(--primery);
        font-weight: var(--fw-600);
        text-transform: uppercase;
        border: 1px solid var(--primery);
        padding: 7px 18px;
        transition: var(--transition-1);
      }

      .header .btn-outline:is(:hover, :focus) {
        background-color: var(--primery);
        color: var(--white);
      }

      /**
      * HERO
      */

      .hero {
        text-align: left;
      }

      .hero .container {
        grid-template-columns: 1fr 0.7fr;
        align-items: center;
      }

      .hero-subtitle {
        margin-inline: 25px 0;
      }

      .hero .btn-group {
        justify-content: flex-start;
      }

      /**
      * ABOUT
      */

      .about .container {
        grid-template-columns: 1fr 1fr;
        align-items: center;
      }

      /**
      * SERVICE
      */

      .service-card {
        display: flex;
        align-items: flex-start;
        gap: 10px;
      }

      /**
      * FEATURES
      */

      .features .grid-list {
        grid-template-columns: repeat(3, 1fr);
      }

      /**
      * FAQ
      */

      .faq .container {
        grid-template-columns: 0.48fr 1fr;
        align-items: flex-start;
      }

      /**
      * FOOTER
      */

      .footer-top .container {
        grid-template-columns: 1fr 0.8fr 0.8fr 1fr;
      }

      .footer-bottom .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .copyright {
        margin-block-end: 0;
      }
    }

    /**
    * responsive for large than 1200px screen
    */

    @media (min-width: 1200px) {
      /**
      * CUSTOM PROPERTY
      */

      :root {
        /**
        * typography
        */

        --fs-1: 7.5rem;
        --fs-4: 3.8rem;
      }

      /**
      * REUSED STYLE
      */

      .container {
        max-width: 1140px;
      }

      .btn-link {
        --fs-12: 1.5rem;
      }

      /**
      * HERO
      */

      .hero {
        min-height: 100vh;
        display: grid;
        align-items: center;
      }

      /**
      * ABOUT
      */

      .about .container {
        grid-template-columns: 1fr 0.7fr;
      }

      /**
      * FAQ
      */

      .faq-card .card-action.active+.card-content {
        max-height: 200px;
      }
    }
</style>

<body>

  <header class="header" data-header>
    <div class="container">
      <a href="<?php echo $tecknify; ?>" class="logo">
        <img src="<?php echo $tecknify; ?>assets/images/Tecknify-Logo.png" alt="Tecknify Logo">
      </a>

      <nav class="navbar" data-navbar>
        <div class="wrapper">
          <a href="<?php echo $tecknify; ?>" class="logo">
            <img src="<?php echo $tecknify; ?>assets/images/tecknify-logo1.png" alt="Tecknify Logo">
          </a>
          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
          <li><a href="<?php echo $tecknify; ?>" class="navbar-link" data-nav-link>Home</a></li>
          <li><a href="<?php echo $tecknify; ?>about/" class="navbar-link" data-nav-link>About</a></li>
          <li class="dropdown">
            <a href="<?php echo $tecknify; ?>service/" class="navbar-link" data-nav-link>Services</a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $tecknify; ?>service/seo-optimization/" class="dropdown-link">Social Medial Marketing</a></li>
              <li><a href="<?php echo $tecknify; ?>service/social-media-marketing/" class="dropdown-link">Social Medial Marketing</a></li>
              <li><a href="<?php echo $tecknify; ?>service/ppc-advertising/" class="dropdown-link">PPC Advertising</a></li>
              <li><a href="<?php echo $tecknify; ?>service/web-development/" class="dropdown-link">Web Development</a></li>
              <li><a href="<?php echo $tecknify; ?>service/app-development/" class="dropdown-link">App Development</a></li>
              <li><a href="<?php echo $tecknify; ?>service/content-marketing/" class="dropdown-link">Content Marketing</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $tecknify; ?>portfolio/" class="navbar-link" data-nav-link>Portfolio</a></li>
          <li><a href="<?php echo $tecknify; ?>blog/" class="navbar-link" data-nav-link>Blog</a></li>
          <li><a href="<?php echo $tecknify; ?>contact/" class="navbar-link" data-nav-link>Contact Us</a></li>
        </ul>
      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="tel:+917682064973" class="btn-outline">Let's talk</a>
      <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
  </header>

  <script>
    'use strict';

    const addEventOnElem = function(elem, type, callback) {
      if (elem.length > 1) {
        for (let i = 0; i < elem.length; i++) {
          elem[i].addEventListener(type, callback);
        }
      } else {
        elem.addEventListener(type, callback);
      }
    }

    const navbar = document.querySelector("[data-navbar]");
    const navToggler = document.querySelectorAll("[data-nav-toggler]");
    const overlay = document.querySelector("[data-overlay]");

    const toggleNavbar = function() {
      navbar.classList.toggle("active");
      overlay.classList.toggle("active");
    }

    addEventOnElem(navToggler, "click", toggleNavbar);


    const navLinks = document.querySelectorAll("[data-nav-link]");

    const closeNavbar = function() {
      navbar.classList.remove("active");
      overlay.classList.remove("active");
    }

    addEventOnElem(navLinks, "click", closeNavbar);

    // Add scroll effect to header
    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });


    document.querySelectorAll('.dropdown > .navbar-link').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();

        const dropdownMenu = this.nextElementSibling;
        if (dropdownMenu) {
          const isActive = dropdownMenu.classList.contains('active');

          // Close all other dropdowns
          document.querySelectorAll('.dropdown-menu.active').forEach(menu => {
            menu.classList.remove('active');
          });

          // Toggle the current dropdown
          if (!isActive) {
            dropdownMenu.classList.add('active');
          }
        }
      });
    });
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
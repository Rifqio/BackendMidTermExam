<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<header class="bg-white w-full filter drop-shadow-lg rounded-b-md">
    <nav class="container flex items-center py-4 mt-4">

        <div id="brand" class="py-0.5 uppercase text-xl text-blue-500 font-bold">
        <a href="home">Crudpie</a>
        </div>
        <ul id="menu" class="hidden text-sm sm:flex flex-1 justify-end items-center gap-12 uppercase text-secondary font-medium">
            <a href="#contact-section">Contact</a> 
            <a href="#about-section">About</a>
            <a href="https://github.com/Rifqio/BackendMidTermExam" target="_blank">
                <button class="bg-brand-orange text-white rounded-lg py-2 px-4 uppercase hover:bg-red-700">download</button>
            </a>
        </ul>
    </nav>
</header>

<!--Content-->
<section id="content-section"  class="relative">
    <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14">
        <div class="flex flex-1 flex-col items-center flex-wrap transform -translate-y-8">
            <h2 class="text-5xl font-bold m-2 flex ">Crudpie make your life easier!</h2>
        <p class="text-lg text-justify text-gray-500 mt-2">
           Crudpie is a clean and lightweight CRUD tool manager and our goal is to make people's job much easier. Try it for free and feel the difference
        </p>
        <div class="flex justify-center flex-wrap gap-6 mt-2">
            <a href="demo">
                <button type="button"  class="btn btn-blue font-semibold transform hover:scale-125">Get started</button>
            </a>
            <button type="button" class="btn btn-white font-semibold transform hover:scale-125">See the docs</button>
        </div>        
        </div>
        <div class="flex justify-center flex-1 mb-10">
            <img class="w-4/6 h-4/6" src="img/support1.png" alt="">
        </div>
    </div>
</section>

<div class="about">
    <section id="about-section" class="bg-gray-100 py-20 mt-20">
        
            <div class="">
                <h1 class="text-3xl text-center font-semibold text-gray-700">About</h1>
                <p class="text-center mt-4 font-normal text-gray-500">CRUDPIE was created by Rifqi Oktario using Codeigniter 4 and Tailwind CSS. The goal is to accomplish backend midterm exam. </p>
            </div>
            <div class="flex justify-center mt-5">
                <div class="bg-blue-500 p-1.5 rounded-full">
                    <div class="block bg-white rounded-full p-1"> 
                    <img src="img/Profile.jpg" class="rounded-full h-48 w-48" alt="">
                    </div>
                </div>
            </div>
            <div class="flex items-center flex-col">
                <p class="italic font-bold text-2xl text-gray-500 mt-5">"Our goal is to provide cleanest and simplest CRUD tool"</p>
                <p class="text-gray-500">-Rifqi Oktario</p>
            </div>
    </section>
</div>

<section id="contact-section" class="bg-blue-500 text-white py-20">
    <div class="container">
        <div class="">
            <p class="font-light uppercase text-center mb-8">50.000+ already downloaded</p>
            <h1 class="3xl text-center">Always keep in touch with us!</h1>
            <div class="flex flex-row px-44 mt-4 items-center gap-6">
                <input type="text" class="focus:outline-none flex-1 px-4 py-3 rounded-md text-black " placeholder="Enter your email address">
                <button type="button" class="btn bg-brand-orange font-semibold transform hover:scale-125">Get started</button>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection();?>
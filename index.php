<!DOCTYPE html>
<html lang="en">

<head>
  <title>Homepage</title>
  <?php include("./assets/section/meta.php"); ?>
</head>

<body>
  <div class="super_container">
    <?php include("./assets/section/header.php"); ?>

    <main class="my-8 w-[99vw] mx-auto md:px-20 px-0 overflow-hidden flex flex-col gap-8 z-0 bg-white">
      <section class="w-full bg-red-700 overflow-hidden flex justify-start" id="slideshow">
        <div class="w-full shrink-0 bg-slider bg-cover flex flex-col p-14 gap-8 text-white items-center md:items-start justify-center">
          <h2 class="capitalize font-black text-[clamp(2em,5vw,5em)] w-full md:w-[max(10em,70%)] text-center md:text-left leading=[1em]">a new online shopping experience.</h2>
          <p class="w-full md:w-[max(10em,50%)] text-center md:text-left">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem necessitatibus numquam culpa eaque. Qui sed commodi deleniti laborum quaerat a.
          </p>
          <a href="#" class="border border-white border-2 px-8 py-4 capitalize text-sm md:text-2xl font-bold hover:text-black hover:bg-white transition-all">shop now</a>
        </div>
        <div class="w-full absolute left-0 bottom-0 flex items-center justify-start px-12 pb-6 gap-2 z-10">
          <span class="font-bold text-white hover:text-red-500 cursor-pointer">01.</span>
          <span class="font-bold text-white hover:text-red-500 cursor-pointer">02.</span>
          <span class="font-bold text-white hover:text-red-500 cursor-pointer">03.</span>
        </div>
      </section>
      <section id="advert" class="w-full flex flex-wrap gap-8 text-white">
        <div class="h-96 basis-[20em] grow bg-red-400 relative p-12 relative">
          <img src="./assets/img/avds_small.jpg" alt="" class="w-full h-full object-cover absolute top-0 left-0" />
          <div class="absolute inset-8 border border-2 border-white p-8 flex flex-col gap-4 items-start">
            <h3 class="text-[clamp(3em,4vw,5em)] font-black capitalize w-full md:w-[max(6em,50%)] leading-[1em]">smart phones</h3>
            <a href="#" class="border-b-4 border-white capitalize font-bold">see more</a>
          </div>
        </div>
        <div class="h-96 basis-[20em] grow-[3] bg-green-400 relative p-12 relative">
          <img src="./assets/img/avds_large.jpg" alt="" class="w-full h-full object-cover absolute top-0 left-0" />
          <div class="absolute inset-10 right-16 bg-[rgba(0,0,0,0.7)] flex flex-col items-start justify-start p-4 gap-4">
            <h3 class="text-[clamp(2em,4vw,5em)] font-black capitalize w-full md:w-[max(6em,50%)] leading-[1em]">professional cameras</h3>
            <p class="w-full md:w-[max(6em,50%)]">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Non natus iusto saepe amet quidem. Quae beatae est itaque veritatis accusantium!
            </p>
            <a href="#" class="border-b-4 mt-2 border-white capitalize font-bold">see more</a>
          </div>
        </div>
      </section>
      <section id="products" class="w-full flex flex-wrap gap-8 justify-center">
        <div class="h-96 w-64 flex flex-col">
          <div class="grow relative">
            <span class="absolute top-0 left-1/5 bg-red-700 flex items-center justify-center"></span>
            <img src="./assets/img/avds_small.jpg" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="w-full p-2 flex flex-col items-start justify-center">
            <a href="#" class="capitalize font-bold text-xl hover:text-red-700 transition-colors">phone accessory</a>
            <h5 class="text-grey font-black italic">N200</h5>
          </div>
        </div>
        <div class="h-96 w-64 flex flex-col">
          <div class="grow relative">
            <span class="absolute top-0 left-1/5 bg-red-700 flex items-center justify-center"></span>
            <img src="./assets/img/avds_small.jpg" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="w-full p-2 flex flex-col items-start justify-center">
            <a href="#" class="capitalize font-bold text-xl hover:text-red-700 transition-colors">phone accessory</a>
            <h5 class="text-grey font-black italic">N200</h5>
          </div>
        </div>
        <div class="h-96 w-64 flex flex-col">
          <div class="grow relative">
            <span class="absolute top-0 left-1/5 bg-red-700 flex items-center justify-center"></span>
            <img src="./assets/img/avds_small.jpg" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="w-full p-2 flex flex-col items-start justify-center">
            <a href="#" class="capitalize font-bold text-xl hover:text-red-700 transition-colors">phone accessory</a>
            <h5 class="text-grey font-black italic">N200</h5>
          </div>
        </div>
        <div class="h-96 w-64 flex flex-col">
          <div class="grow relative">
            <span class="absolute top-0 left-1/5 bg-red-700 flex items-center justify-center"></span>
            <img src="./assets/img/avds_small.jpg" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="w-full p-2 flex flex-col items-start justify-center">
            <a href="#" class="capitalize font-bold text-xl hover:text-red-700 transition-colors">phone accessory</a>
            <h5 class="text-grey font-black italic">N200</h5>
          </div>
        </div>
        <div class="h-96 w-64 flex flex-col">
          <div class="grow relative">
            <span class="absolute top-0 left-1/5 bg-red-700 flex items-center justify-center"></span>
            <img src="./assets/img/avds_small.jpg" alt="" class="w-full h-full object-cover" />
          </div>
          <div class="w-full p-2 flex flex-col items-start justify-center">
            <a href="#" class="capitalize font-bold text-xl hover:text-red-700 transition-colors">phone accessory</a>
            <h5 class="text-grey font-black italic">N200</h5>
          </div>
        </div>
      </section>
      <section id="banner" class="w-full h-96 p-12 flex items-center justify-center md:justify-end bg-banner bg-cover">
        <div class="aspect-[4/3] bg-red-500 w-96 text-white flex flex-col items-start justify-center py-6 px-12 gap-4">
          <h3 class="text-[clamp(2em,4vw,5em)] font-bold capitalize w-[max(6em,50%)] leading-[1em]">amazing devices</h3>
          <p class="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non natus iusto saepe amet quidem. Quae beatae est itaque veritatis accusantium!
          </p>
          <a href="#" class="border-b-4 mt-2 border-white capitalize font-bold">see more</a>
        </div>
      </section>
    </main>
    <?php include("./assets/section/footer.php"); ?>
  </div>
</body>

</html>
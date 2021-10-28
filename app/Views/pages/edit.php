<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<header class="bg-gray-800 pt-1">
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <nav class="container flex py-4 mt-2 justify-center ">
        <div id="brand" class="py-0.5 uppercase text-xl text-blue-500 font-bold">
          <a href="/home" class="">Crudpie</a>
        </div>
    </nav>
</header>

<section class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="col-span-12 -mt-32">
        
        <form action="/demo/update/<?= $demo['id']; ?>" method="POST">
            <?= csrf_field();?>
            <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
            <div class="p-4 shadow-md rounded-md text-left" style="max-width: 1200px;">
            <div class=" text-red-500 font-semibold text-center mt-8 mb-2">
                <?= $validation->listErrors();?>
            </div>
            <div class="mb-2">
                <label class="">
                    <span class="text-white">Name</span>
                    <input type="text" name="name" class="form-input mt-1 block w-full shadow-inner" autofocus value="<?= $demo['name']; ?>">               
                </label>
            </div>
            
            <label class="block">
                <span class="text-white">Email</span>
                <input type="text" name="email" class="form-input mt-1 block w-full" value="<?= $demo['email']; ?>">
  
            </label>
            
            <label class="block mt-4">
                <span class="text-white">Major</span>
                <?php 
                $options = [
                    '-'=>'',
                    'Informatics' => 'Informatics',
                    'Phsyics' => 'Phsyics',
                    'Pharmacy' => 'Pharmacy',
                    'Chemistry' => 'Chemistry',
                    'Mathematics' => 'Mathematics',
                ];
                $class = ['class'=> 'form-select mt-1 block w-full'];
                echo form_dropdown('major',$options,'',$class);
                ?>
            </label>

            <label class="block mt-4">
                <span class="text-white">Class</span>
                <?php 
                $options = [
                    '-'=>'',
                    '2021' => '2021',
                    '2020' => '2020',
                    '2019' => '2019',
                    '2018' => '2018',
                    '2017' => '2017',
                    '2016' => '2016',
                ];
                $class = ['class'=> 'form-select mt-1 block w-full'];
                echo form_dropdown('class',$options,'',$class);
                ?>
            </label>
            
            <div class="mt-4">
                <span class="text-white">Status</span>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                     <?php
                        $data = [
                            'name' => 'status',
                            'class'=> 'form-radio',
                            'id' => 'status-1',
                            'value' => 'Active'
                        ];
                        echo form_radio($data);       
                    ?>
                    <label class="ml-2 text-white" for="status">Active</label>
                    </label>

                    <label class="inline-flex items-center ml-6">
                    <?php
                        $data = [
                            'name' => 'status',
                            'class'=> 'form-radio',
                            'id' => 'status-2',
                            'value' => 'Graduated'
                        ];
                        echo form_radio($data);       
                    ?>
                    <label class="ml-2 text-white" for="status-2">Graduated</label>
                    </label>
                </div>
            </div>

            <div class="flex mt-6">
                <label class="flex items-center">
                <input type="checkbox" class="form-checkbox">
                <span class="ml-2 text-white">I agree to the <span class="underline">privacy policy</span></span>
                </label>
            </div>
            </div>
            
            <a href="">
                <button class="btn bg-red-500 text-white hover:bg-green-700 w-full">Edit</button>
            </a>
       
     </form>
    </div>    
</section>


<?= $this->endSection();?>
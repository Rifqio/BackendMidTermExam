<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<header class="bg-gray-800 pt-1">
    <nav class="container flex py-4 mt-2 justify-center ">
        <div id="brand" class="py-0.5 uppercase text-xl text-blue-500 font-bold">
          <a href="home" class="">Crudpie</a>
        </div>
    </nav>
</header>
<div class="flex items-center justify-center min-h-screen bg-gray-900">
    <div class="col-span-12 -mt-32">
      <div class="overflow-auto lg:overflow-visible text-white">
        <div class="flex justify-center mb-2">
              <img class="rounded-full h-24 w-24 object-cover" src="/img/user.png" alt="unsplash image">
        </div>
          <?php
          $table = new \CodeIgniter\View\Table();
          $template = [
            'table_open'         => '<table border="0" cellpadding="4" cellspacing="0">',
    
            'thead_open'         => '<thead>',
            'thead_close'        => '</thead>',
    
            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',
    
            'tfoot_open'         => '<tfoot>',
            'tfoot_close'        => '</tfoot>',
    
            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',
    
            'tbody_open'         => '<tbody>',
            'tbody_close'        => '</tbody>',
    
            'row_start'          => '<tr>',
            'row_end'            => '</tr>',
            'cell_start'         => '<td>',
            'cell_end'           => '</td>',
    
            'row_alt_start'      => '<tr>',
            'row_alt_end'        => '</tr>',
            'cell_alt_start'     => '<td>',
            'cell_alt_end'       => '</td>',
    
            'table_close'        => '</table>'
            ];
          $name = $demo['name'];
          $email = $demo['email'];
          $class = $demo ['class'];
          $status = $demo ['status'];

          $table->setTemplate($template);
          $table->addRow($name);
          $table->addRow($email);
          $table->addRow($class);
          $table->addRow($status);
          
          echo $table->generate();

          ?>
          <a href="/demo">
              <button class="btn bg-red-500 text-white hover:bg-red-700 w-full mt-2">Back</button>
          </a>

<?= $this->endSection();?>

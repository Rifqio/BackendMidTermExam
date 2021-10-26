<?= $this->extend('layout/template');?>
<?= $this->section('content');?>

<header class="bg-gray-800 pt-1">
    <nav class="container flex py-4 mt-2 justify-center ">
        <div id="brand" class="py-0.5 uppercase text-xl text-blue-500 font-bold">
          <a href="home" class="">Crudpie</a>
        </div>
    </nav>
</header>

<section>
  <link
    href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
    rel="stylesheet">
  <div class="flex items-center justify-center min-h-screen bg-gray-900">
    <div class="col-span-12 -mt-32">
      <div class="overflow-auto lg:overflow-visible ">
              <h1 class="text-center text-white">Welcome to the demo. Feel free to explore all the features we have</h1>
        <table class="table text-gray-400 border-separate space-y-6 text-sm ">
          <thead class="bg-gray-800 text-gray-500">
            <tr>
              <th class="p-3">Name</th>
              <th class="p-3 text-left">Major</th>
              <th class="p-3 text-left">Class</th>
              <th class="p-3 text-left">Status</th>
              <th class="p-3 text-left">Action</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach($demo as $d): ?>

            <tr class="bg-gray-800">
              <td class="p-3">
                <div class="flex align-items-center">
                  <img class="rounded-full h-12 w-12 object-cover" src="img/user.png" alt="unsplash image">
                  <div class="ml-3">
                    <div class=""><?= $d['name']; ?></div>
                    <div class="text-gray-500"><?= $d['email']; ?></div>
                  </div>
                </div>
              </td>
              <td class="p-3"><?= $d['major'];?> </td>
              <td class="p-3 font-bold"><?= $d['class']; ?> </td>
              <td class="p-3">
                <span class="bg-purple-700 text-white font-semibold rounded-md px-2"><?= $d['status'] ?></span>
              </td>
              <td class="p-3 ">
                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                  <i class="material-icons-outlined text-base">visibility</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                  <i class="material-icons-outlined text-base">edit</i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                  <i class="material-icons-round text-base">delete_outline</i>
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
              <div class="grid">
              <a href="demo/create">
                <button class="btn place-items-center bg-green-500 text-white hover:bg-green-700 w-full">Add Data</button>
              </a>
              </div>     
            </div>
    </div>
  </div>
</section>
<style>
	.table {
		border-spacing: 0 15px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
<?= $this->endSection();?>

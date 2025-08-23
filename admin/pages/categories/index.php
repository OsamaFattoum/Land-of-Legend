<?php 
 /****** Query Get Categories Form Database  ****** */
 $cats = DataBaseQuery::selectQuery('*','categorys');
?>

<!-- Start Header categories  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Categories Tables</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header categories  -->

<div class="row py-3"></div>

<!-- Start Content categories  -->
    <div class="row overflow-auto">
        <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name_English</th>
                    <th scope="col">Name_Arabic</th>
                    <th scope="col">Desc_English</th>
                    <th scope="col">Desc_Arabic</th>
                    <th scope="col">Image</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($cats)){ $i = 1; foreach($cats as $cat){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$cat['name_en']."</td>
                            <td>".$cat['name_ar']."</td>
                            <td>".$cat['desc_en']."</td>
                            <td>".$cat['desc_ar']."</td>
                            <td><img style='width: 100px;height: 100px; object-fit:cover' src='Layout/images/upload/".$cat['image']."'/></td>
                            <td class=''>
                                <a href='?page=categories&edit=".$cat['id']."' class='btn btn-info'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=categories&delete=".$cat['id']."' class='btn btn-danger mt-2'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Categories Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=categories&add" class="btn btn-primary"><i class="fa fa-plus me-1" aria-hidden="true"></i> Add Category</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content categories  -->
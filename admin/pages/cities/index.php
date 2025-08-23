<?php 
     /****** Query Get Cities Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT cities.*, categorys.name_en AS 'category_name' FROM `cities` INNER JOIN `categorys` ON cities.cat_id = categorys.id";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $cities = $stmt->fetchAll();
?>

<!-- Start Header Cities  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Cities Tables</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header Cities  -->

<div class="row py-3"></div>

<!-- Start Content Cities  -->
    <div class="row overflow-auto">
        <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name_English</th>
                    <th scope="col">Name_Arabic</th>
                    <th scope="col">Desc_English</th>
                    <th scope="col">Desc_Arabic</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($cities)){ $i = 1; foreach($cities as $city){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$city['name_en']."</td>
                            <td>".$city['name_ar']."</td>
                            <td>".$city['desc_en']."</td>
                            <td>".$city['desc_ar']."</td>
                            <td>".$city['category_name']."</td>
                            <td><img style='width: 100px;height: 100px; object-fit:cover' src='Layout/images/upload/".$city['image']."'/></td>
                            <td class=''>
                                <a href='?page=cities&edit=".$city['id']."' class='btn btn-info'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=cities&delete=".$city['id']."' class='btn btn-danger mt-2'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Cities Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=cities&add" class="btn btn-primary"><i class="fa fa-plus me-1" aria-hidden="true"></i> Add City</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content categories  -->
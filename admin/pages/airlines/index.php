<?php 
     /****** Query Get Airlines Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT airlines.*, countries.name AS 'country_name' FROM `airlines` INNER JOIN `countries` ON airlines.country_id = countries.id";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $airlines = $stmt->fetchAll();
?>

<!-- Start Header Airlines  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Airlines Tables</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header Airlines  -->

<div class="row py-3"></div>

<!-- Start Content Airlines  -->
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
                    <th scope="col">City Name</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($airlines)){ $i = 1; foreach($airlines as $airline){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$airline['name_en']."</td>
                            <td>".$airline['name_ar']."</td>
                            <td>".wordwrap($airline['desc_en'],strlen($airline['desc_en'])/2,'<br>',true)."</td>
                            <td>".wordwrap($airline['desc_ar'],strlen($airline['desc_ar'])/2,'<br>',true)."</td>
                            <td>".$airline['country_name']."</td>
                            <td><img style='width: 100px;height: 100px; object-fit:cover' src='Layout/images/upload/".$airline['image']."'/></td>
                            <td class=''>
                                <a href='?page=airlines&edit=".$airline['id']."' class='btn btn-info mt-2'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=airlines&delete=".$airline['id']."' class='btn btn-danger mt-2'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='9' class='text-center'> <h3>No Airlines Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=airlines&add" class="btn btn-primary"><i class="fa fa-plus me-1" aria-hidden="true"></i> Add Airline</a>
        <a href="?page=airlines&res" class="btn btn-dark"><i class="fa fa-table me-1" aria-hidden="true"></i>Table Reservation</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content Airlines  -->
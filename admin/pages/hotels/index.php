<?php 
     /****** Query Get Hotels Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT hotels.*, cities.name_en AS 'city_name' FROM `hotels` INNER JOIN `cities` ON hotels.city_id = cities.id";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $hotels = $stmt->fetchAll();
?>

<!-- Start Header Hotels  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Hotels Tables</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header Hotels  -->

<div class="row py-3"></div>

<!-- Start Content Hotels  -->
    <div class="row overflow-auto">
        <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name_English</th>
                    <th scope="col">Name_Arabic</th>
                    <th scope="col">Desc_English</th>
                    <th scope="col">Desc_Arabic</th>
                    <th scope="col">Stars</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($hotels)){ $i = 1; foreach($hotels as $hotel){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$hotel['name_en']."</td>
                            <td>".$hotel['name_ar']."</td>
                            <td>".wordwrap($hotel['desc_en'],strlen($hotel['desc_en'])/2,'<br>',true)."</td>
                            <td>".wordwrap($hotel['desc_ar'],strlen($hotel['desc_ar'])/2,'<br>',true)."</td>
                            <td>".$hotel['stars']."</td>
                            <td>".$hotel['city_name']."</td>
                            <td><img style='width: 100px;height: 100px; object-fit:cover' src='Layout/images/upload/".$hotel['image']."'/></td>
                            <td class=''>
                                <a href='?page=hotels&edit=".$hotel['id']."' class='btn btn-info mt-2'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=hotels&delete=".$hotel['id']."' class='btn btn-danger mt-2'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='9' class='text-center'> <h3>No Hotels Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=hotels&add" class="btn btn-primary"><i class="fa fa-plus me-1" aria-hidden="true"></i> Add Hotel</a>
        <a href="?page=hotels&res" class="btn btn-dark"><i class="fa fa-table me-1" aria-hidden="true"></i>Table Reservation</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content Hotels  -->
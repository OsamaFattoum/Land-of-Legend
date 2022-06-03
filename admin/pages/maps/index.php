<?php
      /****** Query Get Maps Form Database  ****** */
      $con = DataBaseQuery::conDataBase();
      $sql = "SELECT maps.*, cities.name_en AS 'city_name' FROM `maps` INNER JOIN `cities` ON maps.city_id = cities.id";
      $stmt = $con->prepare($sql);
      $stmt->execute();
      $maps = $stmt->fetchAll();
?>

<!-- Start Header Maps  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Maps Table</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header Maps  -->

<div class="row py-3"></div>

<!-- Start Content Maps  -->
    <div class="row overflow-auto">
    <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($maps)){ $i = 1; foreach($maps as $map){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$map['city_name']."</td>
                            <td class=''>
                                <a href='?page=maps&edit=".$map['id']."' class='btn btn-info'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=maps&delete=".$map['id']."' class='btn btn-danger'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Maps Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=maps&add" class="btn btn-primary"><i class="fa fa-add me-1" aria-hidden="true"></i> Add Map</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content Maps  -->

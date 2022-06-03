<?php 
     /****** Query Get Content Form Database  ****** */
     $con = DataBaseQuery::conDataBase();
     $sql = "SELECT content.*, cities.name_en AS 'city_name' FROM `content` INNER JOIN `cities` ON content.city_id = cities.id";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $contents = $stmt->fetchAll();
?>

<!-- Start Header Content  -->
    <div class="row">
        <div class="col d-flex justify-content-center align-items-center">
            <h1>Content Tables</h1>
        </div>
        <?php include_once ROOT_FILE.'Template/includes/Message.php'; ?>
        
    </div>
<!-- End Header Content  -->

<div class="row py-3"></div>

<!-- Start Content Content  -->
    <div class="row overflow-auto">
        <table class="table table-borderd table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name_English</th>
                    <th scope="col">Name_Arabic</th>
                    <th scope="col">Desc_English</th>
                    <th scope="col">Desc_Arabic</th>
                    <th scope="col">City Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Oprations</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($contents)){ $i = 1; foreach($contents as $content){
                    echo "<tr>
                            <th scope='row'>".$i++."</th>
                            <td>".$content['name_en']."</td>
                            <td>".$content['name_ar']."</td>
                            <td>".wordwrap($content['desc_en'],strlen($content['desc_en'])/2,'<br>',true)."</td>
                            <td>".wordwrap($content['desc_ar'],strlen($content['desc_ar'])/2,'<br>',true)."</td>
                            <td>".$content['city_name']."</td>
                            <td><img style='width: 100px;height: 100px; object-fit:cover' src='Layout/images/upload/".$content['image']."'/></td>
                            <td class=''>
                                <a href='?page=content&edit=".$content['id']."' class='btn btn-info'><i class='fa-solid fa-edit text-white'></i></a>
                                <a href='?page=content&delete=".$content['id']."' class='btn btn-danger mt-2'><i class='fa-solid fa-trash text-white'></i></a>
                            </td>
                        </tr>";
                }}else{ echo "<tr> <td colspan='8' class='text-center'> <h3>No Contents Found</h3></td> </tr>";} ?>
            </tbody> 
        </table>
    </div>
    <div class="btn-add">
        <a href="?page=content&add" class="btn btn-primary"><i class="fa fa-plus me-1" aria-hidden="true"></i> Add Content</a>
        <a href="/admin" class="btn btn-info"><i class="fa fa-backward me-1" aria-hidden="true"></i>Back</a>
    </div>
<!-- End Content Content  -->
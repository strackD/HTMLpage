<?php 

$title = 'Monitor';
include "./templates/head.php"; 

?>
<div class="container">
    <div class="row">
        <?php
        $adresses = [
            [
                "name" => "localhost",
                "raum" => "111",
                "online" => true 
            ],
            [
                "name" => "192.168.0.1",
                "raum" => "108",
                "online" => true 
            ],
            [
                "name" => "fileserver",
                "raum" => "109",
                "online" => true 
            ],
            [
                "name" => "shopserver",
                "raum" => "111",
                "online" => false
            ]
        ];
        foreach($adresses as $adress){
        ?>
            <div class="col-4 p-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $adress["name"]; ?></h5>
                        <h6 class="card-subtitle mb-2 text-<?php echo $adress["online"] ? "success" : "danger" ?>"><?php echo $adress["online"] ? "online" : "offline"; ?></h6>
                        <p class="card-text">Raum <?php echo $adress["raum"]; ?></p>
                    </div> 
                </div>
            </div>
        <?php 
        }
        ?>
    </div>
</div>
<?php include "./templates/footer.php"; ?>
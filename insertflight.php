<?php include("includes/flightheader.php"); 
if(isset($_GET['aircraftmsn']))
{
    $aircraftmsn=$_GET["aircraftmsn"];
}
?>
<div class="card">
    <div class="card-content">
        <p><?php echo $aircraftmsn ?></p>
    </div>
</div>
</div>
</div>
<?php include("includes/footer.php") ?>
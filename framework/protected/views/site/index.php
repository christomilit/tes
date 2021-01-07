
<div class="hello">
    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">Hello <?= $name; ?>.</p>

<form action="" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Yuk bisa yuk!</label>
    <input type="text" class="form-control" name="kegiatan" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <input type="submit" name="submit" class="btn btn-warning" value="Add">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Tindakan</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= $kegiatan?></td>
      <td><p onclick="myFunction(this, 'red')">Selesai</p></td>
    </tr>

  </tbody>
</table>
</form>
    </div>
</div>
<script type="text/javascript">
    
function myFunction(elmnt,clr) {
  elmnt.style.color = clr;
}
</script>


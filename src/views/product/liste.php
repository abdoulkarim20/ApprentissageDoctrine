<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($data as $product) { ?>
    <tr>
      <td><?=$product->getId()?></td>
      <td><?=$product->getName()?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
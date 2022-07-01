<?php
//menampilkan footer
include "../template/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../template/css/style.css">

<div class="tab-pane fade show active" id="show-item" role="tabpanel" aria-labelledby="home-tab">
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-2">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Deskripsi Produk</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                <% for(let i = 0; i < item.length; i++){ %>
                <tr>
                  <td><%= i + 1 %></td>
                  <td><%= item[i].title %></td>
                  <td><%= item[i].city %></td>
                  <td>Rp <%= item[i].price %></td>
                  <td>
                    <form action="/admin/item/<%= item[i].id %>/delete?_method=DELETE" method="POST">
                      <a href="/admin/item/show-image/<%= item[i].id %>"class="btn btn-info btn-circle btn-sm"><i class="fas fa-image"></i></a>
                      <a href="/admin/item/<%= item[i].id %>" class="btn btn-warning btn-circle btn-sm">
                      <i class="fas fa-edit"></i></a>
                      <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                      <a href="/admin/item/show-detail-item/<%= item[i].id %>"class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></a>
                    </form>
                  </td>
                </tr>
                <% } %>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    
  </div>

<?php
//menampilkan footer
include "../template/footer.php";
?>
<div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                Quản trị <small>khách hàng</small>
            </h1>
        </div>
    </div>
    <!-- /. ROW  -->

    <div class="row">
        <div class="col-md-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin khách hàng
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã khách hàng</th>
                                    <th>Họ tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Điểm tích lũy</th>
                                </tr>
                            </thead>
                            <tbody>                             
                                <% if (list) { %> 
                                    <% for(var i = 0; i < list.length; i++) {%>
                                    <tr class="even gradeC">
                                        <td><%= (i + 1) %></td>
                                        <td><%= list[i].ma_nguoi_dung %></td>
                                        <td><%= list[i].ho_ten %></td>
                                        <td><%= list[i].sdt %></td>
                                        <td class="center"><%= list[i].email %></td> 
                                        <td class="center"><%= list[i].diem_tich_luy %></td>                           
                                    </tr>    
                                    <% } %> <% } %>   
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
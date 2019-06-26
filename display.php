<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Questrial" rel="stylesheet">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Custom css-->
    <link rel="stylesheet" href="/photocopy/css/style.css">
    <link rel="stylesheet" href="/photocopy/css/display.css">
    <!--Title Logo-->
    <link rel="icon" href="/photocopy/img/store.png" type="image/icon type">
    <title>Photocopy | Home</title>
  </head>
  <body>
    <section id="main">
      <div class="container">
        <div id="logo">
          <a href="index.html"><img src="/photocopy/img/store.png" alt="logo" width="250px"></a>
          <h3>Photocopy <span>Shop</span></h3>
        </div>
        <!--Display section-->
        <div class="form_bg">
          <div class="form">
            <!--Request heading-->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="faculty-tab" data-toggle="tab" href="#faculty" role="tab" aria-controls="faculty" aria-selected="false">Faculty</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="dept-tab" data-toggle="tab" href="#dept" role="tab" aria-controls="dept" aria-selected="false">Department</a>
              </li>
            </ul>
            <br>
            <!--Degination-->
            <div class="tab-content" id="myTabContent">

              <!--Student-->
              <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "photo_copy";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM printData WHERE user_type = 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          ?>
                            <!--Card-->
                            <div class="card col-md-4" style="width: 18rem;">
                              <div class="card-body">
                                <h5 class="card-title">Name: <?php echo($row["name"]); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">USN: <?php echo($row["usn"]); ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted">Department: <?php echo($row["dept"]); ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted">Mobile no: <?php echo($row["mobile"]); ?></h6>
                              </div>
                              <ul class="list-group list-group-flush">
                                <li class="list-group-item">No. of pages for color: <?php echo($row["n_color"]); ?></li>
                                <li class="list-group-item">No. of pages for black & white: <?php echo($row["n_bw"]); ?></li>
                                <li class="list-group-item">No. of Copies: <?php echo($row["n_copies"]); ?></li>
                                <li class="list-group-item">Binding: <?php echo($row["binding"]); ?></li>
                                <li class="list-group-item">File: <input type="button" name="" value="Download" class="btn" onclick="location.href='./files/<?php echo($row["file_name"]); ?> '" ></li>
                              </ul>
                              <div class="card-body">
                                <p class="card-text"> Details: <?php echo($row["details"])?></p>
                              </div>
                              <div class="card-body">
                                <input type="button" name="" value="Done" class="btn c">
                              </div>
                            </div>
                          <?php
                        }
                    } else {
                        echo "No Data";
                    }
                    $conn->close();
                ?>

              </div>

              <!--Faculty-->
              <div class="tab-pane fade" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
              <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "photo_copy";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM printData WHERE user_type = 2";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          ?>
                        <!--Cards-->
                        <div class="card" style="width: 18rem;">
                          <div class="card-body">
                            <h5 class="card-title">Name: <?php echo($row["name"]);?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Department: <?php echo($row["dept"]); ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted">Mobile no: <?php echo($row["mobile"]); ?></h6>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">No. of pages for color: <?php echo($row["n_color"]); ?></li>
                            <li class="list-group-item">No. of pages for black & white: <?php echo($row["n_bw"]); ?></li>
                            <li class="list-group-item">No. of Copies: <?php echo($row["n_copies"]); ?></li>
                            <li class="list-group-item">Binding: <?php echo($row["binding"]); ?></li>
                            <li class="list-group-item">File: <input type="button" name="" value="Download" class="btn" onclick="location.href='./files/<?php echo($row["file_name"]); ?> '" ></li>
                          </ul>
                          <div class="card-body">
                            <p class="card-text"> Details: <?php echo($row["details"])?></p>
                          </div>
                          <div class="card-body">
                            <input type="button" name="" value="Done" class="btn c">
                          </div>
                        </div>
                <?php
                        }
                    } else {
                        echo " - ";
                    }
                    $conn->close();
                ?>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "photo_copy";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM storeData WHERE user_type = 4";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          ?>
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Name: <?php echo($row["name"]);?></h5>
                              <h6 class="card-subtitle mb-2 text-muted">Subject: <?php echo($row["subject"]); ?></h6>
                              <h6 class="card-subtitle mb-2 text-muted">Department: <?php echo($row["dept"]); ?></h6>
                              <h6 class="card-subtitle mb-2 text-muted">Semester: <?php echo($row["sem"]); ?></h6>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">File <input type="button" name="" value="Download" class="btn" onclick="location.href='./files/<?php echo($row[`file`]);?>'" ></li>
                            </ul>
                            <div class="card-body">
                              <p class="card-text"> Description: <?php echo($row["description"]); ?></p>
                            </div>
                            <div class="card-body">
                              <input type="button" name="" value="Done" class="btn c">
                            </div>
                          </div>
                    <?php
                            }
                        } else {
                            echo " No Data ";
                        }
                        $conn->close();
                    ?>
              </div>

              <!--Department-->
              <div class="tab-pane fade" id="dept" role="tabpanel" aria-labelledby="dept-tab">
              <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "photo_copy";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM printData WHERE user_type = 3";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          ?>
                          <!--Cards-->
                          <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 class="card-title">Name: <?php echo($row["name"]);?></h5>
                              <h6 class="card-subtitle mb-2 text-muted">Department: <?php echo($row["dept"]);?></h6>
                              <h6 class="card-subtitle mb-2 text-muted">Mobile no: <?php echo($row["mobile"]);?></h6>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">No. of pages for color: <?php echo($row["n_color"]); ?></li>
                              <li class="list-group-item">No. of pages for black & white: <?php echo($row["n_bw"]); ?></li>
                              <li class="list-group-item">No. of Copies: <?php echo($row["n_copies"]); ?></li>
                              <li class="list-group-item">Binding: <?php echo($row["binding"]); ?></li>
                              <li class="list-group-item">File: <input type="button" name="" value="Download" class="btn" onclick="location.href='./files/<?php echo($row["file_name"]); ?> '" ></li>
                            </ul>
                            <div class="card-body">
                              <p class="card-text"> Details: <?php echo($row["details"]); ?></p>
                            </div>
                            <div class="card-body">
                              <input type="button" name="" value="Done" class="btn c">
                            </div>
                          </div>
                <?php
                        }
                    } else {
                        echo " - ";
                    }
                    $conn->close();
                ?>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "photo_copy";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM storeData WHERE user_type = 5";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          ?>

                      <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h6 class="card-title">Department: <?php echo($row["dept"]);?></h6>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">File <input type="button" name="" value="Download" class="btn"></li>
                        </ul>
                        <div class="card-body">
                          <p class="card-text"> Description: <?php echo($row["description"]);?></p>
                        </div>
                        <div class="card-body">
                          <input type="button" name="" value="Done" class="btn c" onclick="location.href='./files/<?php echo($row[`file`]);?>'" >
                        </div>
                      </div>
                <?php
                        }
                    } else {
                        echo " No Data ";
                    }
                    $conn->close();
                ?>

              </div>

            </div>

          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div id="footer">
        © 2019 Gagan Prasad, Inc. All rights reserved.
      </div>
    </section>
  </body>
</html>

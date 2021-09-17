<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="icon" href="/assets/images/Logo.png" type="image/jpg">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/b801844dc1.js" crossorigin="anonymous"></script>

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
  
  <title>Вработи студент</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-yellow col py-3 w-100" id="top">
      <a class="navbar-brand d-flex flex-column align-items-center mx-lg-5 ml-4 logo" href="index.php" id="wrapper-hide"><img src="assets/images/logo.png" width="50" height="50" alt="brainster-logo" class="mx-lg-3"><span class="navbar-logo-caption text-uppercase text-dark">Brainster</span></a>
      <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggler-hide">
        <span class="border-0 menu-logo" id="menu-logo"><i class="fas fa-ellipsis-v fa-2x"></i></span>
        <span class="border-0 menu-logo" id="menu-logo-2"><i class="fas fa-times fa-2x"></i></span>
      </button>

      <div class="collapse navbar-collapse h-100" id="navbarSupportedContent">
        <ul class="navbar-nav w-100 d-flex justify-content-around" id="topColor">
          <li class="nav-item">
            <a class="nav-link font-weight-bold ml-4 ml-md-auto effect-2 " href="https://marketpreneurs.brainster.co/" target="_blank">Академија за маркетинг</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold ml-4 ml-md-auto effect-2" href="https://codepreneurs.brainster.co/" target="_blank">Академија за програмирање</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold ml-4 ml-md-auto effect-2" href="https://datascience.brainster.co/" target="_blank">Академија за data science</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font-weight-bold ml-4 ml-md-auto effect-2" href="https://design.brainster.co/" target="_blank">Академија за дизајн</a>
          </li>
          <li class="nav-item" style="visibility: hidden">
            <a href="formStudent.php"><button class="btn btn-red student-btn text-light font-weight-bold ml-4 ml-md-auto mr-md-4">Вработи наш студент</button></a>
          </li>
        </ul>
      </div>
    </nav><!-- NAVBAR END  -->
  
  <div class="container-fluid w-100 p-0" id="wrapper">
      <!-- FORM -->
    <div class="row w-100 m-0 p-0 forms bg-yellow pt-3 pb-5">
        <div class="col d-flex flex-column justify-content-center mb-4 pb-4">
        <p class="display-3 py-4 my-5 font-weight-normal mx-auto text-center">Вработи студенти</p>
            <form action="form.php" method="POST">
                <div class="row w-100 m-0 p-0 d-flex justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <label for="inputName" class="font-weight-bold">Име и презиме</label>
                            <input type="text" class="form-control" id="inputName" name="full_name" aria-describedby="nameHelp" placeholder="Внесете ваше име и презиме" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                          <label for="inputCompanyName" class="font-weight-bold">Име на компанија</label>
                          <input type="text" class="form-control" id="inputCompanyName" name="company_name" aria-describedby="companyHelp" placeholder="Внесете име на вашата компанија" required>
                        </div>
                    </div>
                </div>
                <div class="row w-100 m-0 p-0 d-flex justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <label for="inputCompanyEmail" class="font-weight-bold">Контакт емаил</label>
                            <input type="email" class="form-control" id="inputCompanyEmail" name="email" aria-describedby="emailHelp" placeholder="Внесете емаил на вашата компанија" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <label for="inputCompanyPhone" class="font-weight-bold">Контакт телефон</label>
                            <input type="tel" class="form-control" id="inputCompanyPhone" name="telephone_number" aria-describedby="telephoneHelp" placeholder="Внесете телефон на вашата компанија" required>
                        </div>
                    </div>
                </div>
                <div class="row w-100 m-0 p-0 d-flex justify-content-center align-items-end mb-5">
                    <div class="col-lg-4 col-md-6">
                        <label for="selectStudentType" class="font-weight-bold">Тип на студент</label>
                        <select class="form-control " id="selectStudentType" name="type_of_student" required>
                            <option value="" disabled selected hidden><li class="list-group-item">Одбери...</li></option>
                            <option value="1">Студенти од маркетинг</option>
                            <option value="2">Студенти од програмирање</option>
                            <option value="3">Студенти од data science</option>
                            <option value="4">Студенти од дизајн</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-end justify-content-end">
                        <button class="btn btn-red text-light font-weight-bold w-100 mt-3 mt-md-auto" type="submit" title="Submit form">Испрати</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include "footer.html"?>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
    <script>
      $("[data-toggle=tooltip]").tooltip();
    </script>
  <!-- navbar script -->
  <script src="assets/script/navbar.js"></script>
</body>
</html>
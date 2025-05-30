<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,600;1,500&display=swap" rel="stylesheet">



    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo base_url('/css/style.css');?>">
</head>
<body>

<nav class="navbar navbar-expand-md bg-body-light border-bottom sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/all_listings"
      ><i class="fa-regular fa-compass"></i
    ></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNavAltMarkup"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/all_listings">Explore</a>
      </div>
      <div class="navbar-nav ms-auto">
        <form class="d-flex" role="search">
          <input
            class="form-control me-2 search-inp"
            id="s-inp"
            type="search"
            placeholder="Search destinations"
          />
          <button class="btn search-btn" id="sbtn" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>Search
          </button>
        </form>
      </div>
      <div class="navbar-nav ms-auto">
        <a class="nav-link" href="/listings/new">Add New Home</a>
         
        <a class="nav-link" href="/logout"><b>Log out</b></a>
        
      </div>
    </div>
  </div>
</nav>

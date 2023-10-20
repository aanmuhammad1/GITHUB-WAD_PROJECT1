<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">Country</label>
      <select class="" name="country" required>
        <option value="" selected hidden>Select Country</option>
        <option value="IDN">Indonesia</option>
        <option value="USA">America</option>
        <option value="Japan">Japan</option>
      </select>
      <label for="">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female"> Female
      <label for="">Languages</label>
      <input type="checkbox" name="languages[]" value="English">English
      <input type="checkbox" name="languages[]" value="Indonesia">Indonesia
      <input type="checkbox" name="languages[]" value="Japan">Japanese
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Machakos lms</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
       table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 0;
    padding: 0;
    width: 100%;
    table-layout: fixed;
  }
  
  table caption {
    color:#2A88AD;
    font-size: 1.5em;
    margin: .5em 0 .75em;
  }
  thead{
    color: black;
  }
  tbody{
    color: black;
  }
  
  table tr {
    /* background-color: #2A88AD; */
    border: 1px solid #ddd;
    padding: .35em;
  }
  
  table th,
  table td {
    padding: .625em;
    text-align: center;
  }
  
  table th {
    font-size: .85em;
    letter-spacing: .1em;
    text-transform: uppercase;
  }
  a{
    text-decoration: none;
    color: white;
  }

  .edit-table{
    background-color: rgb(79, 176, 79);
    padding: 6px 8px;
  }
  .remove-table{
    background-color: rgb(173, 80, 80);
    padding: 6px 8px;
  }

  .circle {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    background-color:#2A88AD;
    margin-top: 10px;
    }
    
    .circle::before {
      content: "+";
      height:30px;
      width:30px;
      font-size:30px;
      display:flex;
      flex-direction:row;
      align-items:center;
      justify-content:center;
      font-weight:bold;
      font-family:courier;
      color:white;
      background-color: rgb(68, 166, 68);
    }
    .circle:hover, .top-divide .view-pdf:hover {
    transform: scale(1.05);
    background-color:rgb(59, 114, 59);
    }
    .top-divide{
      margin: 0px 30px;
      display: flex;
      justify-content: space-between;
    }
    .top-divide .view-pdf{
      background-color: #2A88AD;
      padding: 6px 8px;
      color: white;
      text-decoration: none;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
  
  @media screen and (max-width: 600px) {
    table {
      border: 0;
    }
  
    table caption {
      font-size: 1.3em;
    }
    
    table thead {
      border: none;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }
    
    table tr {
      border-bottom: 3px solid #ddd;
      display: block;
      margin-bottom: .625em;
    }
    
    table td {
      border-bottom: 1px solid #ddd;
      display: block;
      font-size: .8em;
      text-align: right;
    }
    
    table td::before {
      /*
      * aria-label has no advantage, it won't be read inside a table
      content: attr(aria-label);
      */
      content: attr(data-label);
      float: left;
      font-weight: bold;
      text-transform: uppercase;
    }
    
    table td:last-child {
      border-bottom: 0;
    }
  }
     </style>
   </head>
<body>
 
  <table>
    <caption>Units</caption>
    <thead>
      <tr>
        <th scope="col">Unit name</th>
        <th scope="col">Unit Code</th>
        <th scope="col">Course</th>
        <th scope="col">Department</th>
        <th scope="col">School</th>
        <th scope="col">Date created</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach ($unit as $item)
      <tr>
        <td data-label="Unit">{{ $item->unit_name }}</td>
        <td data-label="Code">{{ $item->unit_code }}</td>
        <td data-label="Course">{{ $item->course_name }}</td>
        <td data-label="Department">{{ $item->department_name }}</td>
        <td data-label="School">{{ $item->school_name }}</td>
        <td data-label="Date">{{ $item->created_at->toDayDateTimeString() }}</td>
   
      </tr>
      @endforeach
    </tbody>
  </table>

</body>
</html>

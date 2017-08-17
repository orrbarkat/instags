<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <title>Sumea - Start</title>
 
    <!-- Bootstrap Core CSS -->
<link rel='stylesheet' href='../../../../bower_components/bootstrap/dist/css/bootstrap.min.css'>

<!-- Dashboard Theme CSS -->
<link rel='stylesheet' href='../../styles/styles-theme.css'>

<!-- MetisMenu CSS -->
<link rel='stylesheet' href='../../../../bower_components/metisMenu/dist/metisMenu.min.css'>

<!-- Fonts Awesome CSS -->
<link rel='stylesheet' href='font-awesome-4.4.0/css/font-awesome.min.css'>

    <!-- Chartlist-js -->
    <link rel='stylesheet' href='../../../../bower_components/chartist/dist/scss/chartist.css'>
    <link rel='stylesheet' href='../../styles/chartist-settings-index.css'>
      
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

  

  
    <!-- Bootstrap styling for Typeahead -->
    <link href="Token/dist/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
    <!-- Tokenfield CSS -->
    <link href="Token/dist/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
    <!-- Docs CSS -->
    <link href="Token/docs-assets/css/pygments-manni.css" type="text/css" rel="stylesheet">
    <link href="Token/docs-assets/css/docs.css" type="text/css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.min.js"></script>
    <![endif]-->
    
    


  </head>
    <body>

<h1 class="page-header">
                            Modi-Desk <small>Cycurity Research Team</small>
							
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                
                <?php
                $text = "<strong>First of all please choose what you like to do:</strong><br/>
                            1.If you have little Query for the DB please use the Tag search.<br/>
                            2.If you want to start a research please file the Start Research form.";
                        $today = getdate();
                        $datest = $today['mday'].'/'.$today['mon'].'/'.$today['year'];

                
                ?>
                
                     <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable" align='center'>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            
                             <?php
                             if($datest=='25/10/2015')
                             {
                                echo '<img src="Modi/firstdayofschool.png" width="350" height="350" /><br>';
                             }
                             else if($datest=='15/10/2015')
                             {
                                 echo '<img src="Modi/modima.png" width="350" height="350" /><br><br>';
                             }
                             else if ($datest=='18/10/2015')
                             {
                                 echo '<img src="Modi/firstdayofschooldarya.png" width="350" height="350" /><br>';
                             }
                             else if($datest=='06/12/2015' || $datest=='07/12/2015' || $datest=='08/12/2015' || $datest=='09/12/2015' || $datest=='10/12/2015' || $datest=='13/12/2015' || $datest=='14/12/2015' )
                             {
                                 echo '<img src="Modi/hanoca.png" width="500" height="350" /><br><br>';
                             }
                             else
                             {
                                 echo '<i class="fa fa-info-circle"></i>';
                                 echo ' <img src="icons/ModiB.png" width="90" height="90" />';
                             }
                             ?>
                            
                            
                             <strong>Hey <?php echo $_COOKIE["ResearchName"]?>, My Name Is Modi!</strong> and I'm here to help you! <br>
                            <table border='0'>
                            <tr>
                                <td>
                                  
                                                                

                                    <div id="Moditxt">
                                      <?php  echo $text ?>
                                        </div>
                            <center>
                                        <button data-dismiss="alert" aria-hidden="true"  type="submit" class="btn btn-primary">OK Gever</button>
                            </center>
                             
<script>
function ChangeTxt() {
    document.getElementById("Moditxt").innerHTML = "ggggggggggg";
}
</script>

                           
                            </td>
                            </tr>
                            
                            </table>
                      
                        </div>
                    </div>
                </div>
                

             
     <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-home"></i> Tags Search</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" action="Index.php?page=TagResult" method="post">
                                      <div class="form-group">
                                     <input name="tags" type="text" class="form-control" id="tags" value="" placeholder="Type something and hit enter" />

    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="Token/dist/bootstrap-tokenfield.js" charset="UTF-8"></script>
    <script type="text/javascript" src="Token/docs-assets/js/scrollspy.js" charset="UTF-8"></script>
    <script type="text/javascript" src="Token/docs-assets/js/affix.js" charset="UTF-8"></script>
    <script type="text/javascript" src="Token/docs-assets/js/typeahead.bundle.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="Token/docs-assets/js/docs.min.js" charset="UTF-8"></script>

 
    
         <!-- jQuery -->
    <script src='../../../../bower_components/jquery/dist/jquery.min.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='../../../../bower_components/bootstrap/dist/js/bootstrap.min.js'></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src='../../../../bower_components/metisMenu/dist/metisMenu.min.js'></script>

    <!-- Custom Theme JavaScript -->
    <script src='../../scripts/sumea-custom.js'></script>
    
    <script src='../../../../bower_components/chartist/dist/chartist.js'></script> 
    <script src='../../scripts/chartist-settings.js'></script> 
    
  
  
    
    <script>
        var engine = new Bloodhound({
  local: [{value:'rrrr'},{value:'rrhhrr'},{value:'rrfdgrr'},{value:'rrrrr'}],
  datumTokenizer: function(d) {
    return Bloodhound.tokenizers.whitespace(d.value);
  },
  queryTokenizer: Bloodhound.tokenizers.whitespace
});

engine.initialize();

$('#tags').tokenfield({
  typeahead: [null, { source: engine.ttAdapter() }]
});
        
        
    </script>
                                      </div>
                             <button type="submit" class="btn btn-primary" name="Sign Up">Go</button>
                                 </form>
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                </div>
                            </div>
                        </div>
                    </div>
					
					
					   <div class="col-lg-4">
                          <!-- space between tables -->
                    </div>
					
					
					
					
					  <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-globe"></i> Start Research</h3>
                            </div>
                            <div class="panel-body">
                                <form action="index.php?page=Research1" method="post" role="form" class="form-horizontal">
                                    
                                    <div class="form-group">
    <label for="inputresearch" class="col-sm-2 control-label">Research</label>
                                <div class="col-sm-10">
                                 <select name='classification' class="form-control">
                                 <option value="kyc">KYC</option>
                                 <option value="kycr">KYCR</option>
                                 <option value="Distributor">Distributor</option>
                                 <option value="BlackList">BlackList</option>
                                 <option value="Query">Query</option>
                                 <option value="GSA">GSA</option>
                                 <option value="Research">Research</option>
                                 <option value="Contatcts">Contatcts</option>
                                 </select>
                                </div>
                                    </div>
                                                            
                         
                                      <div class="form-group">
                                 <label for="inputresearch" class="col-sm-2 control-label">Language</label>
                                <div class="col-sm-10">
                                 <select name="ll" class="form-control">
                                     <option value='Hebrew'>Hebrew</option>
                                     <option value='English'>English</option>
                                 </select>
                                </div>
                                    </div>
                                    
                        
                                <div class="form-group">
                                 <label for="inputresearch" class="col-sm-2 control-label">Country</label>
                                <div class="col-sm-10">
                                 <select name="country" class="form-control">
                                  <option value='Israel'>Israel</option>
                                  
     
                                 </select>
                                </div>
                                    </div>
                                    
                                      <div class="form-group">
                                 <label for="inputresearch" class="col-sm-2 control-label">Entities</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='entites' placeholder="Separate the entites with ','"></input>
                                </div>
                                    </div>

                                 
                                 <button type="submit" class="btn btn-primary">Go</button>
                               </div>
                             

                                </form>
                            </div>



                                       
                        </div>
                    </div>
                
                  
                </div>
                <!-- /.row -->
</body>
</html>
<?php
error_reporting(0);
print <<<END

        <div class="container-fluid">
           
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
END;
$id=$_GET['id'];
require "requires/session_check.php";
$m_id=$_SESSION['m_id'];
                                 $a=mysql_query("select * from scheme_details where id='$id'");
                                 $a=mysql_fetch_array($a);
                                 echo "<h2><small>Scheme: </small><b>".$a['name']."</b></h2>";

print <<<END
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
END;
echo '<label>No of People using: '.$a['people_using'].'</label>';
echo '<label class="right">No of Mandals: '.$a['mandals_using'].'</label><br><br><label><b>Total Budget: '.$a['total_budget'].'</b></label><hr>';

echo '<label>Scheme Details:</label><BR><BR>';
print <<<END
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Percentage</th>
                                        <th>Budget</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Percentage</th>
                                        <th>Budget</th>
                                    </tr>
                                </tfoot>

END;
echo "<tbody>";
require "requires/connect.php";

$i=0;
$sql="select * from z_scheme_".$id." where m_id='$m_id'";
$q=mysql_query($sql);

	while($data=mysql_fetch_assoc($q))
	{
			echo '<tr>';
			echo '<td>'.++$i.'</td>';
			echo '<td>'.$query['date'].'</td>';
			echo '<td>'.$query['percentage'].'</td>';
			echo '<td>'.$query['budget'].'</td>';
			
			echo '</tr>';
			$total=1;
	}
if($total==0)
{
	echo '<tr><td><b style="color:red">There is no budget is sanctioned under this scheme.</b></td><td>--</td><td>--</td></tr>';
}
echo "</tbody>";
echo "</table>";

echo "<br><br>";


print <<<END
                              
							
					</div>
				</div>
			</div>
		</div>
	</div>
END;
?>

<?php get_header(); the_post(); ?>

  <!-- Modal -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          <h4 id="myModalLabel" class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
          <button class="btn btn-primary" type="button">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="container">
    
  <h1><?php the_title(); ?></h1>
  
  <!-- Button trigger modal -->
  <button data-target="#myModal" data-toggle="modal" class="btn btn-primary btn-lg">
    Launch demo modal
  </button>

      
  <div class="page-header">
    <h1>Colors</h1>
  </div>
  <div class="row">
    <div class="col-lg-4 color-demo">
      <h3>Custom Colors</h3>
      <?php #adjust count as needed here ?>
      <?php for ($x=1; $x<=6; $x++) { ?>
        <div class="color-block custom-<?= $x ?>"><span></span></div>
      <?php } ?>
    </div>
    <div class="col-lg-8 color-demo">
      <h3>Bootstrap Colors</h3>
      <?php for ($x=1; $x<=7; $x++) { ?>
        <div class="color-block grays-<?= $x ?>"><span></span></div>
      <?php } ?>
      <div>
        <?php for ($x=1; $x<=6; $x++) { ?>
          <div class="color-block bootstrap-<?= $x ?>"><span></span></div>
        <?php } ?>
      </div>
    </div>
  </div>

  
  <div class="page-header">
    <h1>Typography</h1>
  </div>
  
	<div class="row">
    <div class="col-lg-6">
      <h1>Heading 1</h1>
      <h2>Heading 2</h2>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
      <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
    </div>
    <div class="col-lg-6">
    	<h3 class="add-divider">Heading with divider</h3>
      <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
     
      <h3 class="add-divider">Links to Fonts (if available online)</h3>
      <p><a href="#" class="btn btn-default btn-sm" target="_blank">Font Name One <i class="fa fa-external-link"></i></a> </p>
      <p><a href="#" class="btn btn-default btn-sm" target="_blank">Font Name Two <i class="fa fa-external-link"></i></a> </p>
      <p><a href="#" class="btn btn-default btn-sm" target="_blank">Font Name Three <i class="fa fa-external-link"></i></a> </p>
    </div>
  </div><!-- /row -->
  
  <hr />
  
  <div class="row">
    <div class="col-lg-4">
      <h2>Example body text</h2>
      <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
      <p><small>This line of text is meant to be treated as fine print.</small></p>
      <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
      <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
      <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
    </div>
    <div class="col-lg-4">
        <h2>Emphasis classes</h2>
        <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
        <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
        <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
        <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
    </div>
    <div class="col-lg-4">
      <h2>Highlight Inline Text</h2>
      <p>Lorem ipsum dolor sit amet, <span class="bg-success">text with bg-success</span> consectetur adipiscing elit, 
        sed do eiusmod tempor incididunt <span class="bg-info">text with bg-info</span> ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud <span class="bg-warning">text with bg-warning</span> exercitation ullamco 
        laboris nisi ut aliquip ex ea commodo <span class="bg-danger">text with bg-danger</span> consequat. Duis aute 
        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      </p>
    </div>
  </div><!-- /row -->
  
  <div class="row">
    <div class="col-lg-12">
      <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer>Some Person from <cite title="Publication Title">Publication Title</cite></footer>
      </blockquote>
    </div><!-- /col -->
  </div>	<!-- /row -->		

  <div class="page-header">
    <h1>Buttons</h1>
  </div>
  <p>
    <button class="btn btn-lg btn-default" type="button">Default</button>
    <button class="btn btn-lg btn-primary" type="button">Primary</button>
    <button class="btn btn-lg btn-success" type="button">Success</button>
    <button class="btn btn-lg btn-info" type="button">Info</button>
    <button class="btn btn-lg btn-warning" type="button">Warning</button>
    <button class="btn btn-lg btn-danger" type="button">Danger</button>
    <button class="btn btn-lg btn-link" type="button">Link</button>
  </p>
  <p>
    <button class="btn btn-default" type="button">Default</button>
    <button class="btn btn-primary" type="button">Primary</button>
    <button class="btn btn-success" type="button">Success</button>
    <button class="btn btn-info" type="button">Info</button>
    <button class="btn btn-warning" type="button">Warning</button>
    <button class="btn btn-danger" type="button">Danger</button>
    <button class="btn btn-link" type="button">Link</button>
  </p>
  <p>
    <button class="btn btn-sm btn-default" type="button">Default</button>
    <button class="btn btn-sm btn-primary" type="button">Primary</button>
    <button class="btn btn-sm btn-success" type="button">Success</button>
    <button class="btn btn-sm btn-info" type="button">Info</button>
    <button class="btn btn-sm btn-warning" type="button">Warning</button>
    <button class="btn btn-sm btn-danger" type="button">Danger</button>
    <button class="btn btn-sm btn-link" type="button">Link</button>
  </p>
  <p>
    <button class="btn btn-xs btn-default" type="button">Default</button>
    <button class="btn btn-xs btn-primary" type="button">Primary</button>
    <button class="btn btn-xs btn-success" type="button">Success</button>
    <button class="btn btn-xs btn-info" type="button">Info</button>
    <button class="btn btn-xs btn-warning" type="button">Warning</button>
    <button class="btn btn-xs btn-danger" type="button">Danger</button>
    <button class="btn btn-xs btn-link" type="button">Link</button>
  </p>
  
  
  <div class="page-header">
    <h1>Popovers</h1>
  </div>
    
    <button title="" data-original-title="" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>

    <button title="" data-original-title="" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>

    <button title="" data-original-title="" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
    sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>

    <button title="" data-original-title="" type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>

  <div class="page-header">
    <h1>Tooltips</h1>
  </div>
    
    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>

    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>

    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>

    <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
   
  <div class="page-header">
    <h1>Pagination </h1>
  </div> 
  
    <ul class="pagination">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
    
    <ul class="pagination pagination-lg">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">»</a></li>
    </ul>
    
    <ul class="pagination pagination-sm">
      <li class="disabled"><a href="#">«</a></li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">»</a></li>
    </ul>
    
    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
    
    <ul class="pager">
      <li class="previous disabled"><a href="#">← Older</a></li>
      <li class="next"><a href="#">Newer →</a></li>
    </ul>

  <div class="page-header">
    <h1>Tables</h1>
  </div>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td rowspan="2">1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@TwBootstrap</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <td>3</td>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

  
  
  <div class="page-header">
    <h1>Forms </h1>
  </div>
  
  <div class="row">
    <div class="col-lg-6">
      <div class="well">
        <form class="form-horizontal">
          <fieldset>
            <legend>Legend</legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Checkbox
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Textarea</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="textArea"></textarea>
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-2 control-label">Radios</label>
              <div class="col-lg-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Option one is this
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="select" class="col-lg-2 control-label">Selects</label>
              <div class="col-lg-10">
                <select class="form-control" id="select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
                <br>
                <select multiple="" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    
    <div class="col-lg-4 col-lg-offset-1">
      <form>
        <div class="form-group">
          <label class="control-label" for="focusedInput">Focused input</label>
          <input type="text" class="form-control" id="focusedInput" value="This is focused...">
        </div>

        <div class="form-group">
          <label class="control-label" for="disabledInput">Disabled input</label>
          <input type="text" class="form-control" id="disabledInput" placeholder="Disabled input here..." disabled="">
        </div>

        <div class="form-group has-warning">
          <label class="control-label" for="inputWarning">Input warning</label>
          <input type="text" class="form-control" id="inputWarning">
        </div>

        <div class="form-group has-error">
          <label class="control-label" for="inputError">Input error</label>
          <input type="text" class="form-control" id="inputError">
        </div>

        <div class="form-group has-success">
          <label class="control-label" for="inputSuccess">Input success</label>
          <input type="text" class="form-control" id="inputSuccess">
        </div>

        <div class="form-group">
          <label class="control-label" for="inputLarge">Large input</label>
          <input type="text" class="form-control input-lg" id="inputLarge">
        </div>

        <div class="form-group">
          <label class="control-label" for="inputDefault">Default input</label>
          <input type="text" class="form-control" id="inputDefault">
        </div>

        <div class="form-group">
          <label class="control-label" for="inputSmall">Small input</label>
          <input type="text" class="form-control input-sm" id="inputSmall">
        </div>

        <div class="form-group">
          <label class="control-label">Input addons</label>
          <div class="input-group">
            <span class="input-group-addon">$</span>
            <input type="text" class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Button</button>
            </span>
          </div>
        </div>
      </form>
    </div>
    
  </div>


  <div class="page-header">
    <h1>Alerts</h1>
  </div>
  <div class="alert alert-success">
    <strong>Well done!</strong> You successfully read this important alert message.
  </div>
  <div class="alert alert-info">
    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> Best check yo self, you're not looking too good.
  </div>
  <div class="alert alert-danger">
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
  </div>
  
  <div class="row">
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
      </div>
    </div>
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
      </div>
    </div>
    <div class="col-lg-4">
      <div class="alert alert-dismissable alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
      </div>
    </div>
  </div>  
  
  
  <div class="row">
    <div class="col-lg-6">
      <h2>Labels</h2>
        <span class="label label-default">Default</span>
        <span class="label label-primary">Primary</span>
        <span class="label label-success">Success</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-danger">Danger</span>
        <span class="label label-info">Info</span>
    </div>
    <div class="col-lg-6">
      <h2>Badges</h2>
      <ul class="nav nav-pills">
        <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
        <li><a href="#">Profile <span class="badge"></span></a></li>
        <li><a href="#">Messages <span class="badge">3</span></a></li>
      </ul>
    </div>
  </div>


  <div class="page-header">
    <h1>Progress bars</h1>
  </div>
  <div class="progress">
    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"><span class="sr-only">60% Complete</span></div>
  </div>
  <div class="progress">
    <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success"><span class="sr-only">40% Complete (success)</span></div>
  </div>
  <div class="progress">
    <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info"><span class="sr-only">20% Complete</span></div>
  </div>
  <div class="progress">
    <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning"><span class="sr-only">60% Complete (warning)</span></div>
  </div>
  <div class="progress">
    <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger"><span class="sr-only">80% Complete (danger)</span></div>
  </div>
  <div class="progress">
    <div style="width: 35%" class="progress-bar progress-bar-success"><span class="sr-only">35% Complete (success)</span></div>
    <div style="width: 20%" class="progress-bar progress-bar-warning"><span class="sr-only">20% Complete (warning)</span></div>
    <div style="width: 10%" class="progress-bar progress-bar-danger"><span class="sr-only">10% Complete (danger)</span></div>
  </div>



  <div class="page-header">
    <h1>List groups</h1>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="list-group">
        <a class="list-group-item active" href="#">
          Cras justo odio
        </a>
        <a class="list-group-item" href="#">Dapibus ac facilisis in</a>
        <a class="list-group-item" href="#">Morbi leo risus</a>
        <a class="list-group-item" href="#">Porta ac consectetur ac</a>
        <a class="list-group-item" href="#">Vestibulum at eros</a>
      </div>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
      <div class="list-group">
        <a class="list-group-item active" href="#">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a class="list-group-item" href="#">
          <h4 class="list-group-item-heading">List group item heading</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
      </div>
    </div><!-- /.col-sm-4 -->
  </div>


	<?php // Panels ?>
  <div class="page-header">
    <h1>Panels</h1>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title" id="panel-title">Panel title<a href="#panel-title" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title" id="panel-title">Panel title<a href="#panel-title" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title" id="panel-title">Panel title<a href="#panel-title" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title" id="panel-title">Panel title<a href="#panel-title" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  
  <div class="panel panel-warning">
    <div class="panel-heading">
      <h3 class="panel-title" id="panel-title">Panel title<a href="#panel-title" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>
  
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="panel-title" id="panel-title">Panel title<a href="#panel-title" class="anchorjs-link"><span class="anchorjs-icon"></span></a></h3>
    </div>
    <div class="panel-body">
      Panel content
    </div>
  </div>



  <div class="page-header">
    <h1>Wells</h1>
  </div>
  <div class="well">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>
          
     
</div> <!-- /container -->
        
<?php get_footer(); ?>
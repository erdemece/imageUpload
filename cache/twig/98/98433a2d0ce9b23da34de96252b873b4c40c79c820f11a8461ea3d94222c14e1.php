<?php

/* index.twig */
class __TwigTemplate_6123d4216730eed7f9aee0fa5c6563d96217fa077a65fd89d256edbd03af6930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Image Upload</title>

    <!-- Bootstrap -->
    <link href=\"/skin/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/skin/css/bootstrap-theme.css\" rel=\"stylesheet\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <div class=\"container\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\"><h4>Fotoğraf Yüklemece</h4></div>
            <div class=\"panel-body\">
              ";
        // line 25
        if ( !twig_test_empty($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "danger", array()))) {
            // line 26
            echo "              <div class=\"col-xs-12 col-sm-12 col-md-12\">
                <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                  <h4>Hata...</h4>
                  ";
            // line 30
            if (twig_test_iterable($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "danger", array()))) {
                // line 31
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "danger", array()));
                foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                    // line 32
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo " <br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                  ";
            } else {
                // line 35
                echo "                     ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "danger", array()), "html", null, true);
                echo "
                  ";
            }
            // line 37
            echo "                </div>
              </div>
              ";
        }
        // line 40
        echo "              ";
        if ( !twig_test_empty($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array()))) {
            // line 41
            echo "              <div class=\"col-xs-12 col-sm-12 col-md-12\">
                  <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                    ";
            // line 44
            if (twig_test_iterable($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array()))) {
                // line 45
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array()));
                foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                    // line 46
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo " <br />
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                    ";
            } else {
                // line 49
                echo "                       ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array()), "html", null, true);
                echo "
                    ";
            }
            // line 51
            echo "                  </div>
              </div>
              ";
        }
        // line 54
        echo "              <!-- Standar Form -->

              <form action=\"\\upload\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                  <label for=\"exampleInputFile\">Foto Seç</label>
                  <input type=\"file\" name=\"image\">
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-12\">
                   <label for=\"imageOne\" class=\"col-sm-2 control-label\">Fotograf 1:</label>
                   <div class=\"col-sm-2\">
                     <input type=\"text\" class=\"form-control\" name=\"imageOneWidht\" placeholder=\"Width\" required=\"\">
                   </div>
                   <div class=\"col-sm-2\">
                     <input type=\"text\" class=\"form-control\" name=\"imageOneHeight\" placeholder=\"Height\" required=\"\">
                   </div>
                 </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-12\">
                   <label for=\"imageOne\" class=\"col-sm-2 control-label\">Fotograf 2:</label>
                   <div class=\"col-sm-2\">
                     <input type=\"text\" class=\"form-control\" name=\"imageTwoWidht\" placeholder=\"Width\" required=\"\">
                   </div>
                   <div class=\"col-sm-2\">
                     <input type=\"text\" class=\"form-control\" name=\"imageTwoHeight\" placeholder=\"Height\" required=\"\">
                   </div>
                 </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-12\">
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Upload files</button>
                  </div>
                </div>
              </form>
              <div class=\"row\">
              ";
        // line 90
        if ( !twig_test_empty((isset($context["image1"]) ? $context["image1"] : null))) {
            // line 91
            echo "              <div class=\"col-xs-6 col-md-3\">
                <strong>";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["image1"]) ? $context["image1"] : null), "html", null, true);
            echo "</strong>
                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["image1"]) ? $context["image1"] : null), "html", null, true);
            echo "\" class=\"thumbnail\">
                  <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["image1"]) ? $context["image1"] : null), "html", null, true);
            echo "\" alt=\"...\">
                </a>
              </div>
              ";
        }
        // line 98
        echo "              ";
        if ( !twig_test_empty((isset($context["image2"]) ? $context["image2"] : null))) {
            // line 99
            echo "              <div class=\"col-xs-6 col-md-3\">
                <strong>";
            // line 100
            echo twig_escape_filter($this->env, (isset($context["image2"]) ? $context["image2"] : null), "html", null, true);
            echo "</strong>
                <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["image2"]) ? $context["image2"] : null), "html", null, true);
            echo "\" class=\"thumbnail\">
                  <img src=\"";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["image2"]) ? $context["image2"] : null), "html", null, true);
            echo "\" alt=\"...\">
                </a>
              </div>
              ";
        }
        // line 106
        echo "            </div>
            </div>
          </div>
        </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"/skin/js/bootstrap.min.js\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 106,  193 => 102,  189 => 101,  185 => 100,  182 => 99,  179 => 98,  172 => 94,  168 => 93,  164 => 92,  161 => 91,  159 => 90,  121 => 54,  116 => 51,  110 => 49,  107 => 48,  98 => 46,  93 => 45,  91 => 44,  86 => 41,  83 => 40,  78 => 37,  72 => 35,  69 => 34,  60 => 32,  55 => 31,  53 => 30,  47 => 26,  45 => 25,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>Image Upload</title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="/skin/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="/skin/css/bootstrap-theme.css" rel="stylesheet">*/
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/*     <div class="container">*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading"><h4>Fotoğraf Yüklemece</h4></div>*/
/*             <div class="panel-body">*/
/*               {% if flash.danger is not empty  %}*/
/*               <div class="col-xs-12 col-sm-12 col-md-12">*/
/*                 <div class="alert alert-danger alert-dismissible fade in" role="alert">*/
/*                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*                   <h4>Hata...</h4>*/
/*                   {% if flash.danger is iterable %}*/
/*                     {% for key,  error in flash.danger %}*/
/*                     {{ error }} <br />*/
/*                     {% endfor %}*/
/*                   {% else %}*/
/*                      {{ flash.danger }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if flash.success is not empty  %}*/
/*               <div class="col-xs-12 col-sm-12 col-md-12">*/
/*                   <div class="alert alert-success alert-dismissible fade in" role="alert">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*                     {% if flash.success is iterable %}*/
/*                       {% for key,  error in flash.success %}*/
/*                       {{ error }} <br />*/
/*                       {% endfor %}*/
/*                     {% else %}*/
/*                        {{ flash.success }}*/
/*                     {% endif %}*/
/*                   </div>*/
/*               </div>*/
/*               {% endif %}*/
/*               <!-- Standar Form -->*/
/* */
/*               <form action="\upload" method="post" enctype="multipart/form-data">*/
/*                 <div class="form-group">*/
/*                   <label for="exampleInputFile">Foto Seç</label>*/
/*                   <input type="file" name="image">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <div class="col-sm-12">*/
/*                    <label for="imageOne" class="col-sm-2 control-label">Fotograf 1:</label>*/
/*                    <div class="col-sm-2">*/
/*                      <input type="text" class="form-control" name="imageOneWidht" placeholder="Width" required="">*/
/*                    </div>*/
/*                    <div class="col-sm-2">*/
/*                      <input type="text" class="form-control" name="imageOneHeight" placeholder="Height" required="">*/
/*                    </div>*/
/*                  </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <div class="col-sm-12">*/
/*                    <label for="imageOne" class="col-sm-2 control-label">Fotograf 2:</label>*/
/*                    <div class="col-sm-2">*/
/*                      <input type="text" class="form-control" name="imageTwoWidht" placeholder="Width" required="">*/
/*                    </div>*/
/*                    <div class="col-sm-2">*/
/*                      <input type="text" class="form-control" name="imageTwoHeight" placeholder="Height" required="">*/
/*                    </div>*/
/*                  </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <div class="col-sm-12">*/
/*                     <button type="submit" class="btn btn-sm btn-primary">Upload files</button>*/
/*                   </div>*/
/*                 </div>*/
/*               </form>*/
/*               <div class="row">*/
/*               {% if image1 is not empty %}*/
/*               <div class="col-xs-6 col-md-3">*/
/*                 <strong>{{image1}}</strong>*/
/*                 <a href="{{image1}}" class="thumbnail">*/
/*                   <img src="{{image1}}" alt="...">*/
/*                 </a>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if image2 is not empty %}*/
/*               <div class="col-xs-6 col-md-3">*/
/*                 <strong>{{image2}}</strong>*/
/*                 <a href="{{image2}}" class="thumbnail">*/
/*                   <img src="{{image2}}" alt="...">*/
/*                 </a>*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             </div>*/
/*           </div>*/
/*         </div> <!-- /container -->*/
/* */
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="/skin/js/bootstrap.min.js"></script>*/
/*   </body>*/
/* </html>*/
/* */

<?php

/* default/index.html.twig */
class __TwigTemplate_95037066e25c238379d2683ef141d26d9c743b9e8fa6f9f69f4798984d6b1243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a2dbc95affac3bf5139a474b45fe6f92ee089045d1df651b6b61c5407c5aebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2dbc95affac3bf5139a474b45fe6f92ee089045d1df651b6b61c5407c5aebb->enter($__internal_4a2dbc95affac3bf5139a474b45fe6f92ee089045d1df651b6b61c5407c5aebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_39859f5c956020215468bc7daf06d47ea1566a32995b18ee9efdb76f60db9af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39859f5c956020215468bc7daf06d47ea1566a32995b18ee9efdb76f60db9af5->enter($__internal_39859f5c956020215468bc7daf06d47ea1566a32995b18ee9efdb76f60db9af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2dbc95affac3bf5139a474b45fe6f92ee089045d1df651b6b61c5407c5aebb->leave($__internal_4a2dbc95affac3bf5139a474b45fe6f92ee089045d1df651b6b61c5407c5aebb_prof);

        
        $__internal_39859f5c956020215468bc7daf06d47ea1566a32995b18ee9efdb76f60db9af5->leave($__internal_39859f5c956020215468bc7daf06d47ea1566a32995b18ee9efdb76f60db9af5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c3e32dafe99d057370d29787b9f835cdcdbe62afc6d1bcb80202885a751f32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3e32dafe99d057370d29787b9f835cdcdbe62afc6d1bcb80202885a751f32b->enter($__internal_3c3e32dafe99d057370d29787b9f835cdcdbe62afc6d1bcb80202885a751f32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb8f43da75f470040ef9502a646ed1b7064a2d17fa9d7ff62746de4ea2942bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8f43da75f470040ef9502a646ed1b7064a2d17fa9d7ff62746de4ea2942bd2->enter($__internal_eb8f43da75f470040ef9502a646ed1b7064a2d17fa9d7ff62746de4ea2942bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!DOCTYPE html>
<html class=\"full\" lang=\"en\">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>ExtraSolar</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse \" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>

                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">ExtraSolar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"#\">Catalogue</a>
                    </li>
                    <li>
                        <a href=\"#\">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <h1>ExtraSolar</h1>
                <p>Ici sera le système solaire qui gère de ouf</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Page Content -->
       <div class=\"container col-lg-6 col-lg-offset-1\">

           <!-- Page Heading -->
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <h1 class=\"page-header\">Dernières planètes ajoutées / Aléatoire
                       <small>Coucou</small>
                   </h1>
               </div>
           </div>
           <!-- /.row -->

           <!-- Projects Row -->
           <div class=\"row\">
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-uranus.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-jupiter.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-neptune.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-venus.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
           </div>
           <!-- /.row -->



           <!-- Projects Row -->
           <div class=\"row\">
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-neptune.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-mars.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-saturn.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/p-earth.png"), "html", null, true);
        echo "\" alt=\"\">
                   </a>
               </div>
           </div>
           <!-- /.row -->

         </div>
         <!-- /.container -->
         <!-- Page Content -->
            <div class=\"container col-lg-4\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header text-right\">Derniers articles en ligne
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Project One -->
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-5\">
                        <h3>Project One</h3>
                        <h4>Subheading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                        <a class=\"btn btn-primary\" href=\"#\">View Project ></span></a>
                    </div>
                </div>
                <!-- /.row -->


                <!-- Pagination
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        <ul class=\"pagination\">
                            <li>
                                <a href=\"#\">&laquo;</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\">1</a>
                            </li>
                            <li>
                                <a href=\"#\">2</a>
                            </li>
                            <li>
                                <a href=\"#\">3</a>
                            </li>
                            <li>
                                <a href=\"#\">4</a>
                            </li>
                            <li>
                                <a href=\"#\">5</a>
                            </li>
                            <li>
                                <a href=\"#\">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div>
                /.row -->


              </div>
              <!-- /.container -->
</body>

</html>

";
        
        $__internal_eb8f43da75f470040ef9502a646ed1b7064a2d17fa9d7ff62746de4ea2942bd2->leave($__internal_eb8f43da75f470040ef9502a646ed1b7064a2d17fa9d7ff62746de4ea2942bd2_prof);

        
        $__internal_3c3e32dafe99d057370d29787b9f835cdcdbe62afc6d1bcb80202885a751f32b->leave($__internal_3c3e32dafe99d057370d29787b9f835cdcdbe62afc6d1bcb80202885a751f32b_prof);

    }

    // line 207
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26f282fc74c0066acfd40dec502f508cbd454985128814a103516c6020f15179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f282fc74c0066acfd40dec502f508cbd454985128814a103516c6020f15179->enter($__internal_26f282fc74c0066acfd40dec502f508cbd454985128814a103516c6020f15179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b183e8cd988c3a8fc40fb69b2ebadcc37c6fe232b0c4b8f3261867b7e44509e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b183e8cd988c3a8fc40fb69b2ebadcc37c6fe232b0c4b8f3261867b7e44509e6->enter($__internal_b183e8cd988c3a8fc40fb69b2ebadcc37c6fe232b0c4b8f3261867b7e44509e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 208
        echo "<!-- Bootstrap Core CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
<!-- Custom CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/the-big-picture.css"), "html", null, true);
        echo "\">
";
        
        $__internal_b183e8cd988c3a8fc40fb69b2ebadcc37c6fe232b0c4b8f3261867b7e44509e6->leave($__internal_b183e8cd988c3a8fc40fb69b2ebadcc37c6fe232b0c4b8f3261867b7e44509e6_prof);

        
        $__internal_26f282fc74c0066acfd40dec502f508cbd454985128814a103516c6020f15179->leave($__internal_26f282fc74c0066acfd40dec502f508cbd454985128814a103516c6020f15179_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44182227216cd16d2d6b8e2fc7db38abeb1077882f87d008c45ff168d1e2d20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44182227216cd16d2d6b8e2fc7db38abeb1077882f87d008c45ff168d1e2d20d->enter($__internal_44182227216cd16d2d6b8e2fc7db38abeb1077882f87d008c45ff168d1e2d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_04313be15b73f07f9ab98afef9669b3639349fb6a4045f5db7a8cd8eabda2cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04313be15b73f07f9ab98afef9669b3639349fb6a4045f5db7a8cd8eabda2cf1->enter($__internal_04313be15b73f07f9ab98afef9669b3639349fb6a4045f5db7a8cd8eabda2cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
        echo "<!-- jQuery -->
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_04313be15b73f07f9ab98afef9669b3639349fb6a4045f5db7a8cd8eabda2cf1->leave($__internal_04313be15b73f07f9ab98afef9669b3639349fb6a4045f5db7a8cd8eabda2cf1_prof);

        
        $__internal_44182227216cd16d2d6b8e2fc7db38abeb1077882f87d008c45ff168d1e2d20d->leave($__internal_44182227216cd16d2d6b8e2fc7db38abeb1077882f87d008c45ff168d1e2d20d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 218,  327 => 216,  324 => 215,  315 => 214,  303 => 211,  298 => 209,  295 => 208,  286 => 207,  202 => 132,  194 => 127,  186 => 122,  178 => 117,  163 => 105,  155 => 100,  147 => 95,  139 => 90,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<!DOCTYPE html>
<html class=\"full\" lang=\"en\">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>ExtraSolar</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse \" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>

                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">ExtraSolar</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\">Accueil</a>
                    </li>
                    <li>
                        <a href=\"#\">Catalogue</a>
                    </li>
                    <li>
                        <a href=\"#\">Blog</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-12\">
                <h1>ExtraSolar</h1>
                <p>Ici sera le système solaire qui gère de ouf</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Page Content -->
       <div class=\"container col-lg-6 col-lg-offset-1\">

           <!-- Page Heading -->
           <div class=\"row\">
               <div class=\"col-lg-12\">
                   <h1 class=\"page-header\">Dernières planètes ajoutées / Aléatoire
                       <small>Coucou</small>
                   </h1>
               </div>
           </div>
           <!-- /.row -->

           <!-- Projects Row -->
           <div class=\"row\">
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-uranus.png') }}\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-jupiter.png') }}\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-neptune.png') }}\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-venus.png') }}\" alt=\"\">
                   </a>
               </div>
           </div>
           <!-- /.row -->



           <!-- Projects Row -->
           <div class=\"row\">
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-neptune.png') }}\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-mars.png') }}\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-saturn.png') }}\" alt=\"\">
                   </a>
               </div>
               <div class=\"col-md-3 portfolio-item\">
                   <a href=\"#\">
                       <img class=\"img-responsive\" src=\"{{ asset('img/p-earth.png') }}\" alt=\"\">
                   </a>
               </div>
           </div>
           <!-- /.row -->

         </div>
         <!-- /.container -->
         <!-- Page Content -->
            <div class=\"container col-lg-4\">

                <!-- Page Heading -->
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <h1 class=\"page-header text-right\">Derniers articles en ligne
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <!-- Project One -->
                <div class=\"row\">
                    <div class=\"col-md-7\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-md-5\">
                        <h3>Project One</h3>
                        <h4>Subheading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                        <a class=\"btn btn-primary\" href=\"#\">View Project ></span></a>
                    </div>
                </div>
                <!-- /.row -->


                <!-- Pagination
                <div class=\"row text-center\">
                    <div class=\"col-lg-12\">
                        <ul class=\"pagination\">
                            <li>
                                <a href=\"#\">&laquo;</a>
                            </li>
                            <li class=\"active\">
                                <a href=\"#\">1</a>
                            </li>
                            <li>
                                <a href=\"#\">2</a>
                            </li>
                            <li>
                                <a href=\"#\">3</a>
                            </li>
                            <li>
                                <a href=\"#\">4</a>
                            </li>
                            <li>
                                <a href=\"#\">5</a>
                            </li>
                            <li>
                                <a href=\"#\">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div>
                /.row -->


              </div>
              <!-- /.container -->
</body>

</html>

{% endblock %}

{% block stylesheets %}
<!-- Bootstrap Core CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\">
<!-- Custom CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/the-big-picture.css') }}\">
{% endblock %}

{% block javascripts %}
<!-- jQuery -->
<script src=\"{{ asset('js/jquery.js') }}\"></script>
<!-- Bootstrap Core JavaScript -->
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
{% endblock %}
", "default/index.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/default/index.html.twig");
    }
}

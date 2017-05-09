<?php

/* base.html.twig */
class __TwigTemplate_34fc64c73d39b29097dcc3c158d22ecd09f58325207b65ab1df775155d242f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_570697f3492294b4a2f511344033307a703b82ab60853b960048d149a9a12e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_570697f3492294b4a2f511344033307a703b82ab60853b960048d149a9a12e90->enter($__internal_570697f3492294b4a2f511344033307a703b82ab60853b960048d149a9a12e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_836f1400df977e4a045094d3dca4ee69cb1d9c36178bd064da68921cf6d025b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836f1400df977e4a045094d3dca4ee69cb1d9c36178bd064da68921cf6d025b6->enter($__internal_836f1400df977e4a045094d3dca4ee69cb1d9c36178bd064da68921cf6d025b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
=======
        $__internal_e29aa9502154e80771f364c8f61267bdb483b639ed8896c786d511efe71b74a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29aa9502154e80771f364c8f61267bdb483b639ed8896c786d511efe71b74a8->enter($__internal_e29aa9502154e80771f364c8f61267bdb483b639ed8896c786d511efe71b74a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ad5c855ffe31ec573f66906b29d2da89ddab4f0db45452f121079430028b3b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5c855ffe31ec573f66906b29d2da89ddab4f0db45452f121079430028b3b9f->enter($__internal_ad5c855ffe31ec573f66906b29d2da89ddab4f0db45452f121079430028b3b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "</head>

<body>

<div style=\"display: flex; flex-direction: column; min-height: 100vh;\">
    <div class=\"content\" style=\"flex: 1;\">


    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "    </div>


    <footer id=\"footer\">
      ";
        // line 94
        $this->displayBlock('footer', $context, $blocks);
        // line 105
        echo "    </footer>
</div>

</body>
</html>
";
        
<<<<<<< HEAD
        $__internal_570697f3492294b4a2f511344033307a703b82ab60853b960048d149a9a12e90->leave($__internal_570697f3492294b4a2f511344033307a703b82ab60853b960048d149a9a12e90_prof);

        
        $__internal_836f1400df977e4a045094d3dca4ee69cb1d9c36178bd064da68921cf6d025b6->leave($__internal_836f1400df977e4a045094d3dca4ee69cb1d9c36178bd064da68921cf6d025b6_prof);
=======
        $__internal_e29aa9502154e80771f364c8f61267bdb483b639ed8896c786d511efe71b74a8->leave($__internal_e29aa9502154e80771f364c8f61267bdb483b639ed8896c786d511efe71b74a8_prof);

        
        $__internal_ad5c855ffe31ec573f66906b29d2da89ddab4f0db45452f121079430028b3b9f->leave($__internal_ad5c855ffe31ec573f66906b29d2da89ddab4f0db45452f121079430028b3b9f_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e414f2d0fe3d8d12829788c07348bd999f4c9d9a3972638e269168b566e1fde5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e414f2d0fe3d8d12829788c07348bd999f4c9d9a3972638e269168b566e1fde5->enter($__internal_e414f2d0fe3d8d12829788c07348bd999f4c9d9a3972638e269168b566e1fde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f38b659b11cc8f996398bc25f0ef7f58c6dc2a38455c1c8f3b54cc972ac5b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f38b659b11cc8f996398bc25f0ef7f58c6dc2a38455c1c8f3b54cc972ac5b6c->enter($__internal_4f38b659b11cc8f996398bc25f0ef7f58c6dc2a38455c1c8f3b54cc972ac5b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f38b659b11cc8f996398bc25f0ef7f58c6dc2a38455c1c8f3b54cc972ac5b6c->leave($__internal_4f38b659b11cc8f996398bc25f0ef7f58c6dc2a38455c1c8f3b54cc972ac5b6c_prof);

        
        $__internal_e414f2d0fe3d8d12829788c07348bd999f4c9d9a3972638e269168b566e1fde5->leave($__internal_e414f2d0fe3d8d12829788c07348bd999f4c9d9a3972638e269168b566e1fde5_prof);
=======
        $__internal_5d5cdbad6e7e61041eebf018477fa53dc5e2e09718b192467f352025ad020d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5cdbad6e7e61041eebf018477fa53dc5e2e09718b192467f352025ad020d96->enter($__internal_5d5cdbad6e7e61041eebf018477fa53dc5e2e09718b192467f352025ad020d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68c77f19fcdabf7647b234b47b27a1ba83ebaf1d319d8116057e42a15315bc9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c77f19fcdabf7647b234b47b27a1ba83ebaf1d319d8116057e42a15315bc9a->enter($__internal_68c77f19fcdabf7647b234b47b27a1ba83ebaf1d319d8116057e42a15315bc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68c77f19fcdabf7647b234b47b27a1ba83ebaf1d319d8116057e42a15315bc9a->leave($__internal_68c77f19fcdabf7647b234b47b27a1ba83ebaf1d319d8116057e42a15315bc9a_prof);

        
        $__internal_5d5cdbad6e7e61041eebf018477fa53dc5e2e09718b192467f352025ad020d96->leave($__internal_5d5cdbad6e7e61041eebf018477fa53dc5e2e09718b192467f352025ad020d96_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_f6b61c1dc086e4f43d8c064fbab707d18c9d7fb0f5333d16b74737533a4e6052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b61c1dc086e4f43d8c064fbab707d18c9d7fb0f5333d16b74737533a4e6052->enter($__internal_f6b61c1dc086e4f43d8c064fbab707d18c9d7fb0f5333d16b74737533a4e6052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_96433322a44792467cbc7714875bd6ec7708caa5cbf4c1628caab179bc1ee869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96433322a44792467cbc7714875bd6ec7708caa5cbf4c1628caab179bc1ee869->enter($__internal_96433322a44792467cbc7714875bd6ec7708caa5cbf4c1628caab179bc1ee869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));
=======
        $__internal_95006007e698d5213323b995a9ada268a076dd342bbde5c13c1a78d064ce6a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95006007e698d5213323b995a9ada268a076dd342bbde5c13c1a78d064ce6a5d->enter($__internal_95006007e698d5213323b995a9ada268a076dd342bbde5c13c1a78d064ce6a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7636a64d12298b416a63851f3fd11e2dc0c0eb88fe88ac2c41ba21c5ed02e2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7636a64d12298b416a63851f3fd11e2dc0c0eb88fe88ac2c41ba21c5ed02e2e2->enter($__internal_7636a64d12298b416a63851f3fd11e2dc0c0eb88fe88ac2c41ba21c5ed02e2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 10
        echo "        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/themesite/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/main.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/helpers.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/main.css\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css\" />
        <link rel='stylesheet' id='font-awesome-css'  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/wp-content/themes/illdy/layout/css/font-awesome.min.css?ver=4.5.0\" type='text/css' media='all' />
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
    ";
        
<<<<<<< HEAD
        $__internal_96433322a44792467cbc7714875bd6ec7708caa5cbf4c1628caab179bc1ee869->leave($__internal_96433322a44792467cbc7714875bd6ec7708caa5cbf4c1628caab179bc1ee869_prof);

        
        $__internal_f6b61c1dc086e4f43d8c064fbab707d18c9d7fb0f5333d16b74737533a4e6052->leave($__internal_f6b61c1dc086e4f43d8c064fbab707d18c9d7fb0f5333d16b74737533a4e6052_prof);
=======
        $__internal_7636a64d12298b416a63851f3fd11e2dc0c0eb88fe88ac2c41ba21c5ed02e2e2->leave($__internal_7636a64d12298b416a63851f3fd11e2dc0c0eb88fe88ac2c41ba21c5ed02e2e2_prof);

        
        $__internal_95006007e698d5213323b995a9ada268a076dd342bbde5c13c1a78d064ce6a5d->leave($__internal_95006007e698d5213323b995a9ada268a076dd342bbde5c13c1a78d064ce6a5d_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_b0299990ce6a647c342a37acad9da3c62217e8d28d5df3aff209c2ce9ce7bd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0299990ce6a647c342a37acad9da3c62217e8d28d5df3aff209c2ce9ce7bd98->enter($__internal_b0299990ce6a647c342a37acad9da3c62217e8d28d5df3aff209c2ce9ce7bd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_40ae3948df4e087370bddeb0db50ea5e5a632c8155685473bc5879fbbea433e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ae3948df4e087370bddeb0db50ea5e5a632c8155685473bc5879fbbea433e5->enter($__internal_40ae3948df4e087370bddeb0db50ea5e5a632c8155685473bc5879fbbea433e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));
=======
        $__internal_86b6659447b393b8eb13f289212a736bdea1e77893645ae8e8546731df1c443e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b6659447b393b8eb13f289212a736bdea1e77893645ae8e8546731df1c443e->enter($__internal_86b6659447b393b8eb13f289212a736bdea1e77893645ae8e8546731df1c443e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ecbe1baa41abc863933edfc1844eb05fd4840293494861b73d6d0510a3042455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbe1baa41abc863933edfc1844eb05fd4840293494861b73d6d0510a3042455->enter($__internal_ecbe1baa41abc863933edfc1844eb05fd4840293494861b73d6d0510a3042455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 22
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/equalHeight.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/scripts.js"), "html", null, true);
        echo "\"></script>
    ";
        
<<<<<<< HEAD
        $__internal_40ae3948df4e087370bddeb0db50ea5e5a632c8155685473bc5879fbbea433e5->leave($__internal_40ae3948df4e087370bddeb0db50ea5e5a632c8155685473bc5879fbbea433e5_prof);

        
        $__internal_b0299990ce6a647c342a37acad9da3c62217e8d28d5df3aff209c2ce9ce7bd98->leave($__internal_b0299990ce6a647c342a37acad9da3c62217e8d28d5df3aff209c2ce9ce7bd98_prof);
=======
        $__internal_ecbe1baa41abc863933edfc1844eb05fd4840293494861b73d6d0510a3042455->leave($__internal_ecbe1baa41abc863933edfc1844eb05fd4840293494861b73d6d0510a3042455_prof);

        
        $__internal_86b6659447b393b8eb13f289212a736bdea1e77893645ae8e8546731df1c443e->leave($__internal_86b6659447b393b8eb13f289212a736bdea1e77893645ae8e8546731df1c443e_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_de3246d178c56fd8ad2d6597baac1c2491aefa3c2b5157eef70595ca0802eb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3246d178c56fd8ad2d6597baac1c2491aefa3c2b5157eef70595ca0802eb1a->enter($__internal_de3246d178c56fd8ad2d6597baac1c2491aefa3c2b5157eef70595ca0802eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e19945c3df97e5095379fc15c5be0a1e7a40365f0ce535ff174e07bbdd1494cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19945c3df97e5095379fc15c5be0a1e7a40365f0ce535ff174e07bbdd1494cc->enter($__internal_e19945c3df97e5095379fc15c5be0a1e7a40365f0ce535ff174e07bbdd1494cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_63e02c52350bafef51acdb333b92b7dbaf85a925c0195cf36ae02a4304152290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e02c52350bafef51acdb333b92b7dbaf85a925c0195cf36ae02a4304152290->enter($__internal_63e02c52350bafef51acdb333b92b7dbaf85a925c0195cf36ae02a4304152290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_49532c691b1d03885f61ce9951b995a019bf94ec436781de2b1ccc1f41a36b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49532c691b1d03885f61ce9951b995a019bf94ec436781de2b1ccc1f41a36b3b->enter($__internal_49532c691b1d03885f61ce9951b995a019bf94ec436781de2b1ccc1f41a36b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 43
        echo "    <header id=\"header\" class=\"header-blog\" style=\"background-image: url('http://extrasolar.fr/blog/wp-content/uploads/2017/05/cropped-background-space-7.jpg');background-attachment: fixed;\">
      ";
        // line 44
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 45
            echo "          <a class=\"buttonLink posAbsolute\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Déconnexion</a>
      ";
        }
        // line 47
        echo "        <div class=\"top-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-8\">

                        <a href=\"/\" title=\"Extrasolar\" class=\"header-logo\">Extrasolar</a>

                    </div><!--/.col-sm-2-->
                    <div class=\"col-sm-10 col-xs-4\">
                        <nav class=\"header-navigation\">
                            <ul class=\"clearfix\">
                                <li id=\"menu-item-1157\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span>Accueil</span></a></li>
                                <li id=\"menu-item-1156\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_index");
        echo "\"><span>Catalogue</span></a></li>
                                <li id=\"menu-item-1146\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                                <li id=\"menu-item-1147\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                                <li id=\"menu-item-1148\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/contact/\"><span>Contact</span></a></li>
                            </ul><!--/.clearfix-->
                        </nav><!--/.header-navigation-->
                        <button class=\"open-responsive-menu\"><i class=\"fa fa-bars\"></i></button>
                    </div><!--/.col-sm-10-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.top-header-->
        <nav class=\"responsive-menu\">
            <ul>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span>Portail</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_index");
        echo "\"><span>Catalogue</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "\"><span>Blog</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/communaute/\"><span>Communauté</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->getRootURL(), "html", null, true);
        echo "/contact/\"><span>Contact</span></a></li>
            </ul>
        </nav><!--/.responsive-menu-->
        <div class=\"bottom-header blog\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h2>";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
                    </div><!--/.col-sm-12-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.bottom-header.blog-->
    </header><!--/#header-->
    ";
        
<<<<<<< HEAD
        $__internal_e19945c3df97e5095379fc15c5be0a1e7a40365f0ce535ff174e07bbdd1494cc->leave($__internal_e19945c3df97e5095379fc15c5be0a1e7a40365f0ce535ff174e07bbdd1494cc_prof);

        
        $__internal_de3246d178c56fd8ad2d6597baac1c2491aefa3c2b5157eef70595ca0802eb1a->leave($__internal_de3246d178c56fd8ad2d6597baac1c2491aefa3c2b5157eef70595ca0802eb1a_prof);
=======
        $__internal_49532c691b1d03885f61ce9951b995a019bf94ec436781de2b1ccc1f41a36b3b->leave($__internal_49532c691b1d03885f61ce9951b995a019bf94ec436781de2b1ccc1f41a36b3b_prof);

        
        $__internal_63e02c52350bafef51acdb333b92b7dbaf85a925c0195cf36ae02a4304152290->leave($__internal_63e02c52350bafef51acdb333b92b7dbaf85a925c0195cf36ae02a4304152290_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_0a4101ae50bb127c3912596616e877193972c97964195c291be1cdd3687cfd99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4101ae50bb127c3912596616e877193972c97964195c291be1cdd3687cfd99->enter($__internal_0a4101ae50bb127c3912596616e877193972c97964195c291be1cdd3687cfd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3ed93987720885b635cfac711989e35d0d36dc08c1578113d53f52a4ed4ea915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed93987720885b635cfac711989e35d0d36dc08c1578113d53f52a4ed4ea915->enter($__internal_3ed93987720885b635cfac711989e35d0d36dc08c1578113d53f52a4ed4ea915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));
=======
        $__internal_6c920cbd633a60dc4224d65c70fabf6a59d8d17a6810539a66fdd2c380a26eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c920cbd633a60dc4224d65c70fabf6a59d8d17a6810539a66fdd2c380a26eb9->enter($__internal_6c920cbd633a60dc4224d65c70fabf6a59d8d17a6810539a66fdd2c380a26eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_212670055890cb4131829402931b85c24392c1599e1a961b55049a1066ca4f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212670055890cb4131829402931b85c24392c1599e1a961b55049a1066ca4f15->enter($__internal_212670055890cb4131829402931b85c24392c1599e1a961b55049a1066ca4f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 95
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <p>
                <span>Extrasolar.fr de <a href=\"http://www.extrasolar.fr/\">Alexandre Lomaev</a> est mis à disposition selon les termes de la <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International. Licence Creative Commons</a><span>
              </p>
            </div>
          </div>
        </div>
      ";
        
<<<<<<< HEAD
        $__internal_3ed93987720885b635cfac711989e35d0d36dc08c1578113d53f52a4ed4ea915->leave($__internal_3ed93987720885b635cfac711989e35d0d36dc08c1578113d53f52a4ed4ea915_prof);

        
        $__internal_0a4101ae50bb127c3912596616e877193972c97964195c291be1cdd3687cfd99->leave($__internal_0a4101ae50bb127c3912596616e877193972c97964195c291be1cdd3687cfd99_prof);
=======
        $__internal_212670055890cb4131829402931b85c24392c1599e1a961b55049a1066ca4f15->leave($__internal_212670055890cb4131829402931b85c24392c1599e1a961b55049a1066ca4f15_prof);

        
        $__internal_6c920cbd633a60dc4224d65c70fabf6a59d8d17a6810539a66fdd2c380a26eb9->leave($__internal_6c920cbd633a60dc4224d65c70fabf6a59d8d17a6810539a66fdd2c380a26eb9_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 95,  296 => 94,  279 => 83,  269 => 76,  265 => 75,  261 => 74,  257 => 73,  253 => 72,  240 => 62,  236 => 61,  232 => 60,  228 => 59,  224 => 58,  211 => 47,  205 => 45,  203 => 44,  200 => 43,  191 => 42,  179 => 32,  174 => 30,  170 => 29,  166 => 28,  158 => 22,  149 => 21,  136 => 17,  130 => 14,  126 => 13,  122 => 12,  118 => 11,  115 => 10,  106 => 9,  88 => 6,  73 => 105,  71 => 94,  65 => 90,  63 => 42,  53 => 34,  51 => 21,  48 => 20,  46 => 9,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width\">
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {% block stylesheets %}
        <!-- Bootstrap Core CSS -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/themesite/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/main.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('/css/helpers.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ getRootURL() }}/wp-content/themes/illdy/layout/css/main.css\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css\" />
        <link rel='stylesheet' id='font-awesome-css'  href=\"{{ getRootURL() }}/wp-content/themes/illdy/layout/css/font-awesome.min.css?ver=4.5.0\" type='text/css' media='all' />
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascripts %}
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
        <script type=\"text/javascript\">
        if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
        }
        </script>
        <script src=\"{{ asset('js/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/equalHeight.js') }}\"></script>
        <script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('/js/scripts.js') }}\"></script>
    {% endblock %}
</head>

<body>

<div style=\"display: flex; flex-direction: column; min-height: 100vh;\">
    <div class=\"content\" style=\"flex: 1;\">


    {% block body %}
    <header id=\"header\" class=\"header-blog\" style=\"background-image: url('http://extrasolar.fr/blog/wp-content/uploads/2017/05/cropped-background-space-7.jpg');background-attachment: fixed;\">
      {% if app.user %}
          <a class=\"buttonLink posAbsolute\" href=\"{{ path('logout') }}\">Déconnexion</a>
      {% endif %}
        <div class=\"top-header\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-2 col-xs-8\">

                        <a href=\"/\" title=\"Extrasolar\" class=\"header-logo\">Extrasolar</a>

                    </div><!--/.col-sm-2-->
                    <div class=\"col-sm-10 col-xs-4\">
                        <nav class=\"header-navigation\">
                            <ul class=\"clearfix\">
                                <li id=\"menu-item-1157\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('homepage') }}\"><span>Accueil</span></a></li>
                                <li id=\"menu-item-1156\" class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('catalogue_index') }}\"><span>Catalogue</span></a></li>
                                <li id=\"menu-item-1146\" class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"{{ getRootURL() }}\"><span>Blog</span></a></li>
                                <li id=\"menu-item-1147\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/communaute/\"><span>Communauté</span></a></li>
                                <li id=\"menu-item-1148\" class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/contact/\"><span>Contact</span></a></li>
                            </ul><!--/.clearfix-->
                        </nav><!--/.header-navigation-->
                        <button class=\"open-responsive-menu\"><i class=\"fa fa-bars\"></i></button>
                    </div><!--/.col-sm-10-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.top-header-->
        <nav class=\"responsive-menu\">
            <ul>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('homepage') }}\"><span>Portail</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom\"><a href=\"{{ path('catalogue_index') }}\"><span>Catalogue</span></a></li>
                <li class=\"menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active\"><a href=\"{{ getRootURL() }}\"><span>Blog</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/communaute/\"><span>Communauté</span></a></li>
                <li class=\"menu-item menu-item-type-post_type menu-item-object-page\"><a href=\"{{ getRootURL() }}/contact/\"><span>Contact</span></a></li>
            </ul>
        </nav><!--/.responsive-menu-->
        <div class=\"bottom-header blog\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h2>{{ title }}</h2>
                    </div><!--/.col-sm-12-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.bottom-header.blog-->
    </header><!--/#header-->
    {% endblock %}
    </div>


    <footer id=\"footer\">
      {% block footer %}
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-sm-12\">
              <p>
                <span>Extrasolar.fr de <a href=\"http://www.extrasolar.fr/\">Alexandre Lomaev</a> est mis à disposition selon les termes de la <a href=\"https://creativecommons.org/licenses/by-sa/4.0/\" target=\"_blank\">licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International. Licence Creative Commons</a><span>
              </p>
            </div>
          </div>
        </div>
      {% endblock %}
    </footer>
</div>

</body>
</html>
", "base.html.twig", "/Users/IntelliJ/ProjectAlexandre/Extrasolar/symfony/app/Resources/views/base.html.twig");
    }
}

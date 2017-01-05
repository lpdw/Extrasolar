<?php

/* base.html.twig */
class __TwigTemplate_5f636d84497f4c15dd364cbc3f8627b9126f4eb336a4969309fd8e18dd7fb075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d20c8eca287e1bfe45ab17a27801999768124ece47d3dcbbaed2acce4528fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d20c8eca287e1bfe45ab17a27801999768124ece47d3dcbbaed2acce4528fc->enter($__internal_72d20c8eca287e1bfe45ab17a27801999768124ece47d3dcbbaed2acce4528fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_fce4ae833971f938e0f55884b27e02fb36ef3edb1d674033b42e742da4b41e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce4ae833971f938e0f55884b27e02fb36ef3edb1d674033b42e742da4b41e81->enter($__internal_fce4ae833971f938e0f55884b27e02fb36ef3edb1d674033b42e742da4b41e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_72d20c8eca287e1bfe45ab17a27801999768124ece47d3dcbbaed2acce4528fc->leave($__internal_72d20c8eca287e1bfe45ab17a27801999768124ece47d3dcbbaed2acce4528fc_prof);

        
        $__internal_fce4ae833971f938e0f55884b27e02fb36ef3edb1d674033b42e742da4b41e81->leave($__internal_fce4ae833971f938e0f55884b27e02fb36ef3edb1d674033b42e742da4b41e81_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ac51683b458536a8351c83ee893da39b3ebafb00ea1f334b5a3315c2fe8b12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac51683b458536a8351c83ee893da39b3ebafb00ea1f334b5a3315c2fe8b12d->enter($__internal_8ac51683b458536a8351c83ee893da39b3ebafb00ea1f334b5a3315c2fe8b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_639dc624728e459b9bde7de7dddd8885e352594c69d9b6ee5444b8595d5df0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639dc624728e459b9bde7de7dddd8885e352594c69d9b6ee5444b8595d5df0fd->enter($__internal_639dc624728e459b9bde7de7dddd8885e352594c69d9b6ee5444b8595d5df0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_639dc624728e459b9bde7de7dddd8885e352594c69d9b6ee5444b8595d5df0fd->leave($__internal_639dc624728e459b9bde7de7dddd8885e352594c69d9b6ee5444b8595d5df0fd_prof);

        
        $__internal_8ac51683b458536a8351c83ee893da39b3ebafb00ea1f334b5a3315c2fe8b12d->leave($__internal_8ac51683b458536a8351c83ee893da39b3ebafb00ea1f334b5a3315c2fe8b12d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_993b4c981dcc7781766cf638873fd7dba84e8bb65a3b3567d2019cb89a985d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993b4c981dcc7781766cf638873fd7dba84e8bb65a3b3567d2019cb89a985d3e->enter($__internal_993b4c981dcc7781766cf638873fd7dba84e8bb65a3b3567d2019cb89a985d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3324b731f48cb0ff8efa0167ba14392f72ab8206b8d9aa0542a3e946cf7b285e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3324b731f48cb0ff8efa0167ba14392f72ab8206b8d9aa0542a3e946cf7b285e->enter($__internal_3324b731f48cb0ff8efa0167ba14392f72ab8206b8d9aa0542a3e946cf7b285e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3324b731f48cb0ff8efa0167ba14392f72ab8206b8d9aa0542a3e946cf7b285e->leave($__internal_3324b731f48cb0ff8efa0167ba14392f72ab8206b8d9aa0542a3e946cf7b285e_prof);

        
        $__internal_993b4c981dcc7781766cf638873fd7dba84e8bb65a3b3567d2019cb89a985d3e->leave($__internal_993b4c981dcc7781766cf638873fd7dba84e8bb65a3b3567d2019cb89a985d3e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c49de4eeade9adeae777bd20173fae4626351d23c959bc894179242d202ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c49de4eeade9adeae777bd20173fae4626351d23c959bc894179242d202ec8->enter($__internal_05c49de4eeade9adeae777bd20173fae4626351d23c959bc894179242d202ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5216cfdc29edb1f811b7576f48e2ff2dac2cfd8d4a5f1d4a4ad35e69106a3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5216cfdc29edb1f811b7576f48e2ff2dac2cfd8d4a5f1d4a4ad35e69106a3cf->enter($__internal_b5216cfdc29edb1f811b7576f48e2ff2dac2cfd8d4a5f1d4a4ad35e69106a3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5216cfdc29edb1f811b7576f48e2ff2dac2cfd8d4a5f1d4a4ad35e69106a3cf->leave($__internal_b5216cfdc29edb1f811b7576f48e2ff2dac2cfd8d4a5f1d4a4ad35e69106a3cf_prof);

        
        $__internal_05c49de4eeade9adeae777bd20173fae4626351d23c959bc894179242d202ec8->leave($__internal_05c49de4eeade9adeae777bd20173fae4626351d23c959bc894179242d202ec8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddf9ee4674792da331f0281e91ed7651671e269d7eded002efd61005b28e1afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf9ee4674792da331f0281e91ed7651671e269d7eded002efd61005b28e1afc->enter($__internal_ddf9ee4674792da331f0281e91ed7651671e269d7eded002efd61005b28e1afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c71b1af43788ba220185cb93ecfdef4afde34aa142c2003c7442ca20fc8cae2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71b1af43788ba220185cb93ecfdef4afde34aa142c2003c7442ca20fc8cae2e->enter($__internal_c71b1af43788ba220185cb93ecfdef4afde34aa142c2003c7442ca20fc8cae2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c71b1af43788ba220185cb93ecfdef4afde34aa142c2003c7442ca20fc8cae2e->leave($__internal_c71b1af43788ba220185cb93ecfdef4afde34aa142c2003c7442ca20fc8cae2e_prof);

        
        $__internal_ddf9ee4674792da331f0281e91ed7651671e269d7eded002efd61005b28e1afc->leave($__internal_ddf9ee4674792da331f0281e91ed7651671e269d7eded002efd61005b28e1afc_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/symfony/app/Resources/views/base.html.twig");
    }
}

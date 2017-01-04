<?php

/* base.html.twig */
class __TwigTemplate_c6b56aef91f99a389e1a6f47f71cf0ca91dfaf9399112057d815c56c69b075fb extends Twig_Template
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
        $__internal_156efc6d7f811c6eef8ab26f58c2f1f19b7654b9f8f5e686aa4b461b27347add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156efc6d7f811c6eef8ab26f58c2f1f19b7654b9f8f5e686aa4b461b27347add->enter($__internal_156efc6d7f811c6eef8ab26f58c2f1f19b7654b9f8f5e686aa4b461b27347add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_517f23513da6a023cf50e971a16bc9805f8bcba1b67f737404e9277a40cb01ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517f23513da6a023cf50e971a16bc9805f8bcba1b67f737404e9277a40cb01ea->enter($__internal_517f23513da6a023cf50e971a16bc9805f8bcba1b67f737404e9277a40cb01ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_156efc6d7f811c6eef8ab26f58c2f1f19b7654b9f8f5e686aa4b461b27347add->leave($__internal_156efc6d7f811c6eef8ab26f58c2f1f19b7654b9f8f5e686aa4b461b27347add_prof);

        
        $__internal_517f23513da6a023cf50e971a16bc9805f8bcba1b67f737404e9277a40cb01ea->leave($__internal_517f23513da6a023cf50e971a16bc9805f8bcba1b67f737404e9277a40cb01ea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a774d17787f0f28fe03e395ebffdc107526ee0c7a383500b8fb6f08f6b1a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a774d17787f0f28fe03e395ebffdc107526ee0c7a383500b8fb6f08f6b1a6c->enter($__internal_64a774d17787f0f28fe03e395ebffdc107526ee0c7a383500b8fb6f08f6b1a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4db38d415070676ab788ea381e51fed36e533a9049f323eccc3de10e2c1eea75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db38d415070676ab788ea381e51fed36e533a9049f323eccc3de10e2c1eea75->enter($__internal_4db38d415070676ab788ea381e51fed36e533a9049f323eccc3de10e2c1eea75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4db38d415070676ab788ea381e51fed36e533a9049f323eccc3de10e2c1eea75->leave($__internal_4db38d415070676ab788ea381e51fed36e533a9049f323eccc3de10e2c1eea75_prof);

        
        $__internal_64a774d17787f0f28fe03e395ebffdc107526ee0c7a383500b8fb6f08f6b1a6c->leave($__internal_64a774d17787f0f28fe03e395ebffdc107526ee0c7a383500b8fb6f08f6b1a6c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09d91f19d87e06bdfd0c88d191ac9df375dc283c7ebe8d80113492ba5a3877ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d91f19d87e06bdfd0c88d191ac9df375dc283c7ebe8d80113492ba5a3877ad->enter($__internal_09d91f19d87e06bdfd0c88d191ac9df375dc283c7ebe8d80113492ba5a3877ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_637be32a7340bf94c4a71de0ad99b439bee02f99269dd07fb3b3d0834090edfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637be32a7340bf94c4a71de0ad99b439bee02f99269dd07fb3b3d0834090edfb->enter($__internal_637be32a7340bf94c4a71de0ad99b439bee02f99269dd07fb3b3d0834090edfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_637be32a7340bf94c4a71de0ad99b439bee02f99269dd07fb3b3d0834090edfb->leave($__internal_637be32a7340bf94c4a71de0ad99b439bee02f99269dd07fb3b3d0834090edfb_prof);

        
        $__internal_09d91f19d87e06bdfd0c88d191ac9df375dc283c7ebe8d80113492ba5a3877ad->leave($__internal_09d91f19d87e06bdfd0c88d191ac9df375dc283c7ebe8d80113492ba5a3877ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5510c6bf896de3bc81427c9c528d8b3e0ec156ea10b549e1971d7752ee3d5bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5510c6bf896de3bc81427c9c528d8b3e0ec156ea10b549e1971d7752ee3d5bdb->enter($__internal_5510c6bf896de3bc81427c9c528d8b3e0ec156ea10b549e1971d7752ee3d5bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_706801e23e8d6ce05fc15bc7ff041596c30f26ff2e068975d77f4b03931653be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706801e23e8d6ce05fc15bc7ff041596c30f26ff2e068975d77f4b03931653be->enter($__internal_706801e23e8d6ce05fc15bc7ff041596c30f26ff2e068975d77f4b03931653be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_706801e23e8d6ce05fc15bc7ff041596c30f26ff2e068975d77f4b03931653be->leave($__internal_706801e23e8d6ce05fc15bc7ff041596c30f26ff2e068975d77f4b03931653be_prof);

        
        $__internal_5510c6bf896de3bc81427c9c528d8b3e0ec156ea10b549e1971d7752ee3d5bdb->leave($__internal_5510c6bf896de3bc81427c9c528d8b3e0ec156ea10b549e1971d7752ee3d5bdb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4826f6904022428a554f22333c34c2c44a381b1455bcfb5156b5e9613df40744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4826f6904022428a554f22333c34c2c44a381b1455bcfb5156b5e9613df40744->enter($__internal_4826f6904022428a554f22333c34c2c44a381b1455bcfb5156b5e9613df40744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c17d5e9a0a742ce705fc6b0bb5b84ad1343aaa685eded4758fb9e9ffd1289580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17d5e9a0a742ce705fc6b0bb5b84ad1343aaa685eded4758fb9e9ffd1289580->enter($__internal_c17d5e9a0a742ce705fc6b0bb5b84ad1343aaa685eded4758fb9e9ffd1289580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c17d5e9a0a742ce705fc6b0bb5b84ad1343aaa685eded4758fb9e9ffd1289580->leave($__internal_c17d5e9a0a742ce705fc6b0bb5b84ad1343aaa685eded4758fb9e9ffd1289580_prof);

        
        $__internal_4826f6904022428a554f22333c34c2c44a381b1455bcfb5156b5e9613df40744->leave($__internal_4826f6904022428a554f22333c34c2c44a381b1455bcfb5156b5e9613df40744_prof);

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
", "base.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/base.html.twig");
    }
}

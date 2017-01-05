<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8108f5d1ee36c3878b2175a55b3d302e34d4747217b0f55cddfb625da60cfabe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13d34e69b7cc1bdfa5d68bef7e0af61b21f92985aeb0d01ce473e1b41a6edc4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d34e69b7cc1bdfa5d68bef7e0af61b21f92985aeb0d01ce473e1b41a6edc4d->enter($__internal_13d34e69b7cc1bdfa5d68bef7e0af61b21f92985aeb0d01ce473e1b41a6edc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d98895adbea2f32c130c4bad622a57428f332ffa14dfaf8e2238c1de51ddf3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98895adbea2f32c130c4bad622a57428f332ffa14dfaf8e2238c1de51ddf3b0->enter($__internal_d98895adbea2f32c130c4bad622a57428f332ffa14dfaf8e2238c1de51ddf3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d34e69b7cc1bdfa5d68bef7e0af61b21f92985aeb0d01ce473e1b41a6edc4d->leave($__internal_13d34e69b7cc1bdfa5d68bef7e0af61b21f92985aeb0d01ce473e1b41a6edc4d_prof);

        
        $__internal_d98895adbea2f32c130c4bad622a57428f332ffa14dfaf8e2238c1de51ddf3b0->leave($__internal_d98895adbea2f32c130c4bad622a57428f332ffa14dfaf8e2238c1de51ddf3b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47bb8ea4ce06c9d23b83c463adc7da07bf55533f41120e203609854739d688a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bb8ea4ce06c9d23b83c463adc7da07bf55533f41120e203609854739d688a1->enter($__internal_47bb8ea4ce06c9d23b83c463adc7da07bf55533f41120e203609854739d688a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3f90f6a202bb1112eec85e4760e428f499e1c604529278cbae3e535fb42bd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f90f6a202bb1112eec85e4760e428f499e1c604529278cbae3e535fb42bd8c->enter($__internal_f3f90f6a202bb1112eec85e4760e428f499e1c604529278cbae3e535fb42bd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3f90f6a202bb1112eec85e4760e428f499e1c604529278cbae3e535fb42bd8c->leave($__internal_f3f90f6a202bb1112eec85e4760e428f499e1c604529278cbae3e535fb42bd8c_prof);

        
        $__internal_47bb8ea4ce06c9d23b83c463adc7da07bf55533f41120e203609854739d688a1->leave($__internal_47bb8ea4ce06c9d23b83c463adc7da07bf55533f41120e203609854739d688a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6d853527b11cd3d4df4034898e928607065311f89fd6d9c2ce9be6e00db538d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d853527b11cd3d4df4034898e928607065311f89fd6d9c2ce9be6e00db538d->enter($__internal_c6d853527b11cd3d4df4034898e928607065311f89fd6d9c2ce9be6e00db538d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4efb07ea0385bfd963bc6fac8eb1c34ec13caf84e09d9fe89716ec552c81959f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efb07ea0385bfd963bc6fac8eb1c34ec13caf84e09d9fe89716ec552c81959f->enter($__internal_4efb07ea0385bfd963bc6fac8eb1c34ec13caf84e09d9fe89716ec552c81959f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4efb07ea0385bfd963bc6fac8eb1c34ec13caf84e09d9fe89716ec552c81959f->leave($__internal_4efb07ea0385bfd963bc6fac8eb1c34ec13caf84e09d9fe89716ec552c81959f_prof);

        
        $__internal_c6d853527b11cd3d4df4034898e928607065311f89fd6d9c2ce9be6e00db538d->leave($__internal_c6d853527b11cd3d4df4034898e928607065311f89fd6d9c2ce9be6e00db538d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38f4c39c16c8ad22e758b16538e7ba453f44cdf30bbeb74d48a91a9523e161ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f4c39c16c8ad22e758b16538e7ba453f44cdf30bbeb74d48a91a9523e161ea->enter($__internal_38f4c39c16c8ad22e758b16538e7ba453f44cdf30bbeb74d48a91a9523e161ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2dbe393aeebfc6798314d96ef9fe7ae4618051599694e045f378b2c8830a00ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dbe393aeebfc6798314d96ef9fe7ae4618051599694e045f378b2c8830a00ec->enter($__internal_2dbe393aeebfc6798314d96ef9fe7ae4618051599694e045f378b2c8830a00ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2dbe393aeebfc6798314d96ef9fe7ae4618051599694e045f378b2c8830a00ec->leave($__internal_2dbe393aeebfc6798314d96ef9fe7ae4618051599694e045f378b2c8830a00ec_prof);

        
        $__internal_38f4c39c16c8ad22e758b16538e7ba453f44cdf30bbeb74d48a91a9523e161ea->leave($__internal_38f4c39c16c8ad22e758b16538e7ba453f44cdf30bbeb74d48a91a9523e161ea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_9de49696a73a386b9c821b40cea7a17a854c6b86cb5a31903eacce4d1bc730fc extends Twig_Template
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
<<<<<<< HEAD
        $__internal_602dddbd61dbd529d2b743ed8f040c61159b60917c9d5c3159448101396d48e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602dddbd61dbd529d2b743ed8f040c61159b60917c9d5c3159448101396d48e1->enter($__internal_602dddbd61dbd529d2b743ed8f040c61159b60917c9d5c3159448101396d48e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c94e9a528db423a6412f118bf97893368d1261740329f5f6d35164e1f1692f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94e9a528db423a6412f118bf97893368d1261740329f5f6d35164e1f1692f29->enter($__internal_c94e9a528db423a6412f118bf97893368d1261740329f5f6d35164e1f1692f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_765e6e597d4c28441fdc41452dfec9b72563d6cab0f2a75790717cea3e36e22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765e6e597d4c28441fdc41452dfec9b72563d6cab0f2a75790717cea3e36e22f->enter($__internal_765e6e597d4c28441fdc41452dfec9b72563d6cab0f2a75790717cea3e36e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_734965a25261895d5c4e16fb87ca4e2c5a95c8b72ba5e20e9c17ff26d97c06e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734965a25261895d5c4e16fb87ca4e2c5a95c8b72ba5e20e9c17ff26d97c06e9->enter($__internal_734965a25261895d5c4e16fb87ca4e2c5a95c8b72ba5e20e9c17ff26d97c06e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
<<<<<<< HEAD
        $__internal_602dddbd61dbd529d2b743ed8f040c61159b60917c9d5c3159448101396d48e1->leave($__internal_602dddbd61dbd529d2b743ed8f040c61159b60917c9d5c3159448101396d48e1_prof);

        
        $__internal_c94e9a528db423a6412f118bf97893368d1261740329f5f6d35164e1f1692f29->leave($__internal_c94e9a528db423a6412f118bf97893368d1261740329f5f6d35164e1f1692f29_prof);
=======
        $__internal_765e6e597d4c28441fdc41452dfec9b72563d6cab0f2a75790717cea3e36e22f->leave($__internal_765e6e597d4c28441fdc41452dfec9b72563d6cab0f2a75790717cea3e36e22f_prof);

        
        $__internal_734965a25261895d5c4e16fb87ca4e2c5a95c8b72ba5e20e9c17ff26d97c06e9->leave($__internal_734965a25261895d5c4e16fb87ca4e2c5a95c8b72ba5e20e9c17ff26d97c06e9_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/IntelliJ/ProjectAlexandre/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}

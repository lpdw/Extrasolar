<?php

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_b877f9b3ae78d006dc347a1e19a7ca4e71f65795ef03a22267b3a1f7cf744a45 extends Twig_Template
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
        $__internal_b5eb7d5ddef54c17ab14fc4644f9fc351740d7551758d5a4c6a6d8201c88f1c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5eb7d5ddef54c17ab14fc4644f9fc351740d7551758d5a4c6a6d8201c88f1c9->enter($__internal_b5eb7d5ddef54c17ab14fc4644f9fc351740d7551758d5a4c6a6d8201c88f1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_a72133f876b169aaaf2411e94495e2c2f081f4fc27f6d100437926af5a826cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72133f876b169aaaf2411e94495e2c2f081f4fc27f6d100437926af5a826cdc->enter($__internal_a72133f876b169aaaf2411e94495e2c2f081f4fc27f6d100437926af5a826cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
=======
        $__internal_8a1449138d8b8ad19e50ac8af228f3d5388edd44724f3a622c8b15c407edd941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1449138d8b8ad19e50ac8af228f3d5388edd44724f3a622c8b15c407edd941->enter($__internal_8a1449138d8b8ad19e50ac8af228f3d5388edd44724f3a622c8b15c407edd941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));

        $__internal_ad1b25188ea955ff2f0dda1baf2ba85e9246ed0b2af8983d17d745d6ec96f5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1b25188ea955ff2f0dda1baf2ba85e9246ed0b2af8983d17d745d6ec96f5a6->enter($__internal_ad1b25188ea955ff2f0dda1baf2ba85e9246ed0b2af8983d17d745d6ec96f5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/trace.txt.twig"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array())) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class", array()) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type", array())) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function", array()));
            echo "(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file", array());
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line", array());
            echo "
";
        }
        
<<<<<<< HEAD
        $__internal_b5eb7d5ddef54c17ab14fc4644f9fc351740d7551758d5a4c6a6d8201c88f1c9->leave($__internal_b5eb7d5ddef54c17ab14fc4644f9fc351740d7551758d5a4c6a6d8201c88f1c9_prof);

        
        $__internal_a72133f876b169aaaf2411e94495e2c2f081f4fc27f6d100437926af5a826cdc->leave($__internal_a72133f876b169aaaf2411e94495e2c2f081f4fc27f6d100437926af5a826cdc_prof);
=======
        $__internal_8a1449138d8b8ad19e50ac8af228f3d5388edd44724f3a622c8b15c407edd941->leave($__internal_8a1449138d8b8ad19e50ac8af228f3d5388edd44724f3a622c8b15c407edd941_prof);

        
        $__internal_ad1b25188ea955ff2f0dda1baf2ba85e9246ed0b2af8983d17d745d6ec96f5a6->leave($__internal_ad1b25188ea955ff2f0dda1baf2ba85e9246ed0b2af8983d17d745d6ec96f5a6_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  39 => 6,  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if trace.function %}
    at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{% else %}
    at n/a
{% endif %}
{% if trace.file is defined and trace.line is defined %}
        in {{ trace.file }} line {{ trace.line }}
{% endif %}
", "@Twig/Exception/trace.txt.twig", "/Users/IntelliJ/ProjectAlexandre/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}

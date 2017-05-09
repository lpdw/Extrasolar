<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_775081b3c5c1f771c8b2db6fbd068283132b9f17828fed9d022dc1c4b7f4b63a extends Twig_Template
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
        $__internal_5c379f21091682302b5ac8d17516e7b8118d1f2d3463ec3d8d6522bbfac6d404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c379f21091682302b5ac8d17516e7b8118d1f2d3463ec3d8d6522bbfac6d404->enter($__internal_5c379f21091682302b5ac8d17516e7b8118d1f2d3463ec3d8d6522bbfac6d404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_378bf536d84060dce978867bdc154f3b3eb402303a3cfc410052acf2e41df984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378bf536d84060dce978867bdc154f3b3eb402303a3cfc410052acf2e41df984->enter($__internal_378bf536d84060dce978867bdc154f3b3eb402303a3cfc410052acf2e41df984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
        $__internal_fc2dd2d91dc1690a4a7cfd762768d18333e0ab72dd2084c455d15acb75303946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2dd2d91dc1690a4a7cfd762768d18333e0ab72dd2084c455d15acb75303946->enter($__internal_fc2dd2d91dc1690a4a7cfd762768d18333e0ab72dd2084c455d15acb75303946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_7b58f7406cb4ad13d24ad436530df7f777e6b1926a3e2fb37c930f7dce8a9986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b58f7406cb4ad13d24ad436530df7f777e6b1926a3e2fb37c930f7dce8a9986->enter($__internal_7b58f7406cb4ad13d24ad436530df7f777e6b1926a3e2fb37c930f7dce8a9986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
<<<<<<< HEAD
        $__internal_5c379f21091682302b5ac8d17516e7b8118d1f2d3463ec3d8d6522bbfac6d404->leave($__internal_5c379f21091682302b5ac8d17516e7b8118d1f2d3463ec3d8d6522bbfac6d404_prof);

        
        $__internal_378bf536d84060dce978867bdc154f3b3eb402303a3cfc410052acf2e41df984->leave($__internal_378bf536d84060dce978867bdc154f3b3eb402303a3cfc410052acf2e41df984_prof);
=======
        $__internal_fc2dd2d91dc1690a4a7cfd762768d18333e0ab72dd2084c455d15acb75303946->leave($__internal_fc2dd2d91dc1690a4a7cfd762768d18333e0ab72dd2084c455d15acb75303946_prof);

        
        $__internal_7b58f7406cb4ad13d24ad436530df7f777e6b1926a3e2fb37c930f7dce8a9986->leave($__internal_7b58f7406cb4ad13d24ad436530df7f777e6b1926a3e2fb37c930f7dce8a9986_prof);
>>>>>>> eef0dcfd9db7d1f88c4e2f152d18718906896ff4

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "/Users/IntelliJ/ProjectAlexandre/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}

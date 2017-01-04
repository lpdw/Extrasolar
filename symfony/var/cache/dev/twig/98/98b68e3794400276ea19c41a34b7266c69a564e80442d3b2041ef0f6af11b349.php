<?php

/* default/visualisation.html.twig */
class __TwigTemplate_b65f24683505f29aee37a97cc25cb144b99d64acb20776a2b3736d9f3eba8ade extends Twig_Template
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
        $__internal_7cca84f5ce91a6c2af737d8ab51bce1270fa05d3cf90ec328ae4e1789f1bf5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cca84f5ce91a6c2af737d8ab51bce1270fa05d3cf90ec328ae4e1789f1bf5d4->enter($__internal_7cca84f5ce91a6c2af737d8ab51bce1270fa05d3cf90ec328ae4e1789f1bf5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

        $__internal_54dd334bcd30abbbd4781c637903d133f02790fcbcf78e4c748813119b7e16dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dd334bcd30abbbd4781c637903d133f02790fcbcf78e4c748813119b7e16dd->enter($__internal_54dd334bcd30abbbd4781c637903d133f02790fcbcf78e4c748813119b7e16dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/visualisation.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">System Solaire</title>
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 163
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 167
        echo "    </body>
</html>
";
        
        $__internal_7cca84f5ce91a6c2af737d8ab51bce1270fa05d3cf90ec328ae4e1789f1bf5d4->leave($__internal_7cca84f5ce91a6c2af737d8ab51bce1270fa05d3cf90ec328ae4e1789f1bf5d4_prof);

        
        $__internal_54dd334bcd30abbbd4781c637903d133f02790fcbcf78e4c748813119b7e16dd->leave($__internal_54dd334bcd30abbbd4781c637903d133f02790fcbcf78e4c748813119b7e16dd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_48574bbbdd26ccef55e8f7b810e8885eea5d3d2246486a53ed7fe4d2f9fbf247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48574bbbdd26ccef55e8f7b810e8885eea5d3d2246486a53ed7fe4d2f9fbf247->enter($__internal_48574bbbdd26ccef55e8f7b810e8885eea5d3d2246486a53ed7fe4d2f9fbf247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2134b7320b5eac163471d7ab1c7bb14715989451dc3465c79e149241e619ac87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2134b7320b5eac163471d7ab1c7bb14715989451dc3465c79e149241e619ac87->enter($__internal_2134b7320b5eac163471d7ab1c7bb14715989451dc3465c79e149241e619ac87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Visualisation ";
        
        $__internal_2134b7320b5eac163471d7ab1c7bb14715989451dc3465c79e149241e619ac87->leave($__internal_2134b7320b5eac163471d7ab1c7bb14715989451dc3465c79e149241e619ac87_prof);

        
        $__internal_48574bbbdd26ccef55e8f7b810e8885eea5d3d2246486a53ed7fe4d2f9fbf247->leave($__internal_48574bbbdd26ccef55e8f7b810e8885eea5d3d2246486a53ed7fe4d2f9fbf247_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_46f912cd0ac35e8c50685d1811bb017eab9e5a0f3277b486a45dd20cdc08a8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f912cd0ac35e8c50685d1811bb017eab9e5a0f3277b486a45dd20cdc08a8fb->enter($__internal_46f912cd0ac35e8c50685d1811bb017eab9e5a0f3277b486a45dd20cdc08a8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1365f01bc9346c5621a73a2770b0b1fb40935d509cf5daf2822ee3afa1c6e514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1365f01bc9346c5621a73a2770b0b1fb40935d509cf5daf2822ee3afa1c6e514->enter($__internal_1365f01bc9346c5621a73a2770b0b1fb40935d509cf5daf2822ee3afa1c6e514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/styles.css"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_1365f01bc9346c5621a73a2770b0b1fb40935d509cf5daf2822ee3afa1c6e514->leave($__internal_1365f01bc9346c5621a73a2770b0b1fb40935d509cf5daf2822ee3afa1c6e514_prof);

        
        $__internal_46f912cd0ac35e8c50685d1811bb017eab9e5a0f3277b486a45dd20cdc08a8fb->leave($__internal_46f912cd0ac35e8c50685d1811bb017eab9e5a0f3277b486a45dd20cdc08a8fb_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb7c89abb76e8e3cabaa593c7f5e8fc131996cfcb67c1da3613b10b8a82ae8ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7c89abb76e8e3cabaa593c7f5e8fc131996cfcb67c1da3613b10b8a82ae8ee->enter($__internal_eb7c89abb76e8e3cabaa593c7f5e8fc131996cfcb67c1da3613b10b8a82ae8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fdf805d59721afc9a1c547cb7053b8e68d32fe9c48637af9e5223220d2249b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdf805d59721afc9a1c547cb7053b8e68d32fe9c48637af9e5223220d2249b9->enter($__internal_4fdf805d59721afc9a1c547cb7053b8e68d32fe9c48637af9e5223220d2249b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>System Solaire</h1>
            <a id=\"toggle-controls\" href=\"#controls\"><i class=\"icon-controls\"></i>Controls</a>
          </div>
          <div id=\"data\">
            <a class=\"sun\" title=\"sun\" href=\"#sunspeed\">Sun</a>
            <a class=\"mercury\" title=\"mercury\" href=\"#mercuryspeed\">Mercury</a>
            <a class=\"venus\" title=\"venus\" href=\"#venusspeed\">Venus</a>
            <a class=\"earth active\" title=\"earth\" href=\"#earthspeed\">Earth</a>
            <a class=\"mars\" title=\"mars\" href=\"#marsspeed\">Mars</a>
            <a class=\"jupiter\" title=\"jupiter\" href=\"#jupiterspeed\">Jupiter</a>
            <a class=\"saturn\" title=\"saturn\" href=\"#saturnspeed\">Saturn</a>
            <a class=\"uranus\" title=\"uranus\" href=\"#uranusspeed\">Uranus</a>
            <a class=\"neptune\" title=\"neptune\" href=\"#neptunespeed\">Neptune</a>
          </div>
          <div id=\"controls\">
            <label class=\"set-view\">
              <input type=\"checkbox\">
            </label>
            <label class=\"set-zoom\">
              <input type=\"checkbox\">
            </label>
            <label>
              <input type=\"radio\" class=\"set-speed\" name=\"scale\" checked>
              <span>Speed</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-size\" name=\"scale\">
              <span>Size</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-distance\" name=\"scale\">
              <span>Distance</span>
            </label>
          </div>
          <div id=\"universe\" class=\"scale-stretched\">
            <div id=\"galaxy\">
              <div id=\"solar-system\" class=\"earth\">
                <div id=\"mercury\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mercury</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"venus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Venus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"earth\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"orbit\">
                      <div class=\"pos\">
                        <div class=\"moon\"></div>
                      </div>
                    </div>
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Earth</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"mars\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mars</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"jupiter\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Jupiter</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"saturn\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <div class=\"ring\"></div>
                      <dl class=\"infos\">
                        <dt>Saturn</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"uranus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Uranus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"neptune\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Neptune</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"sun\">
                  <dl class=\"infos\">
                    <dt>Sun</dt>
                    <dd><span></span></dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
          <script type=\"text/javascript\">
          if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
          }
          </script>
        </body>

      ";
        
        $__internal_4fdf805d59721afc9a1c547cb7053b8e68d32fe9c48637af9e5223220d2249b9->leave($__internal_4fdf805d59721afc9a1c547cb7053b8e68d32fe9c48637af9e5223220d2249b9_prof);

        
        $__internal_eb7c89abb76e8e3cabaa593c7f5e8fc131996cfcb67c1da3613b10b8a82ae8ee->leave($__internal_eb7c89abb76e8e3cabaa593c7f5e8fc131996cfcb67c1da3613b10b8a82ae8ee_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91bab86f5915516dc1bcfd5c6f39ac49b682a91528d97d5fbe180145e74cda10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91bab86f5915516dc1bcfd5c6f39ac49b682a91528d97d5fbe180145e74cda10->enter($__internal_91bab86f5915516dc1bcfd5c6f39ac49b682a91528d97d5fbe180145e74cda10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45c80cd975ffb281c2fc9c6b1d033613066f2d3e995448232ea94c337e3868c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c80cd975ffb281c2fc9c6b1d033613066f2d3e995448232ea94c337e3868c3->enter($__internal_45c80cd975ffb281c2fc9c6b1d033613066f2d3e995448232ea94c337e3868c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prefixfree.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scripts.min.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_45c80cd975ffb281c2fc9c6b1d033613066f2d3e995448232ea94c337e3868c3->leave($__internal_45c80cd975ffb281c2fc9c6b1d033613066f2d3e995448232ea94c337e3868c3_prof);

        
        $__internal_91bab86f5915516dc1bcfd5c6f39ac49b682a91528d97d5fbe180145e74cda10->leave($__internal_91bab86f5915516dc1bcfd5c6f39ac49b682a91528d97d5fbe180145e74cda10_prof);

    }

    public function getTemplateName()
    {
        return "default/visualisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 165,  282 => 164,  273 => 163,  119 => 18,  110 => 17,  97 => 7,  88 => 6,  70 => 5,  58 => 167,  55 => 163,  53 => 17,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Visualisation {% endblock %}</title>
        {% block stylesheets %}
          <link href=\"{{ asset('/css/styles.css') }}\"></script>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge;chrome=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable = no\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title dir=\"ltr\">System Solaire</title>
    </head>
    <body>
        {% block body %}

        <body class=\"opening hide-UI view-2D zoom-large data-close controls-close\">
          <div id=\"navbar\">
            <a id=\"toggle-data\" href=\"#data\"><i class=\"icon-data\"></i>Data</a>
            <h1>System Solaire</h1>
            <a id=\"toggle-controls\" href=\"#controls\"><i class=\"icon-controls\"></i>Controls</a>
          </div>
          <div id=\"data\">
            <a class=\"sun\" title=\"sun\" href=\"#sunspeed\">Sun</a>
            <a class=\"mercury\" title=\"mercury\" href=\"#mercuryspeed\">Mercury</a>
            <a class=\"venus\" title=\"venus\" href=\"#venusspeed\">Venus</a>
            <a class=\"earth active\" title=\"earth\" href=\"#earthspeed\">Earth</a>
            <a class=\"mars\" title=\"mars\" href=\"#marsspeed\">Mars</a>
            <a class=\"jupiter\" title=\"jupiter\" href=\"#jupiterspeed\">Jupiter</a>
            <a class=\"saturn\" title=\"saturn\" href=\"#saturnspeed\">Saturn</a>
            <a class=\"uranus\" title=\"uranus\" href=\"#uranusspeed\">Uranus</a>
            <a class=\"neptune\" title=\"neptune\" href=\"#neptunespeed\">Neptune</a>
          </div>
          <div id=\"controls\">
            <label class=\"set-view\">
              <input type=\"checkbox\">
            </label>
            <label class=\"set-zoom\">
              <input type=\"checkbox\">
            </label>
            <label>
              <input type=\"radio\" class=\"set-speed\" name=\"scale\" checked>
              <span>Speed</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-size\" name=\"scale\">
              <span>Size</span>
            </label>
            <label>
              <input type=\"radio\" class=\"set-distance\" name=\"scale\">
              <span>Distance</span>
            </label>
          </div>
          <div id=\"universe\" class=\"scale-stretched\">
            <div id=\"galaxy\">
              <div id=\"solar-system\" class=\"earth\">
                <div id=\"mercury\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mercury</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"venus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Venus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"earth\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"orbit\">
                      <div class=\"pos\">
                        <div class=\"moon\"></div>
                      </div>
                    </div>
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Earth</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"mars\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Mars</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"jupiter\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Jupiter</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"saturn\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <div class=\"ring\"></div>
                      <dl class=\"infos\">
                        <dt>Saturn</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"uranus\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Uranus</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"neptune\" class=\"orbit\">
                  <div class=\"pos\">
                    <div class=\"planet\">
                      <dl class=\"infos\">
                        <dt>Neptune</dt>
                        <dd><span></span></dd>
                      </dl>
                    </div>
                  </div>
                </div>
                <div id=\"sun\">
                  <dl class=\"infos\">
                    <dt>Sun</dt>
                    <dd><span></span></dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
          <script type=\"text/javascript\">
          if (typeof jQuery == 'undefined') {
            document.write(unescape(\"%3Cscript src='js/jquery.min.js' type='text/javascript'%3E%3C/script%3E\"));
          }
          </script>
        </body>

      {% endblock %}
        {% block javascripts %}
        <script src=\"{{ asset('js/prefixfree.min.js') }}\"></script>
        <script src=\"{{ asset('js/scripts.min.js') }}\"></script>
      {% endblock %}
    </body>
</html>
", "default/visualisation.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/app/Resources/views/default/visualisation.html.twig");
    }
}

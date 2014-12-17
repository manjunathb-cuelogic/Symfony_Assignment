<?php

/* IbwJobeetBundle:Job:index.html.twig */
class __TwigTemplate_797c91015ab9af892ad64c9b4badac447c5fded98b8837e6c66549b4174c8d18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IbwJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IbwJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ibwjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div>
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"\">Feed</a>
                    </div>
                    <h1>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h1>
                </div>
                <table class=\"jobs\">
                    ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 20
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                            <td class=\"location\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
                echo "</td>
                            <td class=\"position\">
                                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ibw_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo "
                                </a>
                            </td>
                             <td class=\"company\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                </table>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "IbwJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  120 => 30,  103 => 27,  97 => 24,  93 => 23,  88 => 21,  83 => 20,  66 => 19,  60 => 16,  53 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,);
    }
}

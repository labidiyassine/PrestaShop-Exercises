<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig */
class __TwigTemplate_8cdf91db68f95185b9bf81551faa4abdadce72b2d9eb1f02d18d48aabef0fc61 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
<tr>
  <td colspan=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["grid"] ?? null), "columns", [])), "html", null, true);
        echo "\"";
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "attributes", []), "is_empty_state", [])) {
            echo "class=\"border-0\"";
        }
        echo ">";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["grid"] ?? null), "attributes", []), "is_empty_state", [])) {
            // line 29
            $this->loadTemplate([0 => (("@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/" . $this->getAttribute(            // line 30
($context["grid"] ?? null), "id", [])) . ".html.twig"), 1 => "@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/_default.html.twig"], "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", 29)->display(twig_array_merge($context, ["grid" =>             // line 32
($context["grid"] ?? null)]));
        } else {
            // line 35
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Blocks/EmptyState/_default.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", 35)->display(twig_array_merge($context, ["grid" => ($context["grid"] ?? null)]));
        }
        // line 37
        echo "  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 37,  48 => 35,  45 => 32,  44 => 30,  43 => 29,  41 => 28,  34 => 27,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", "C:\\xampp\\htdocs\\exercice\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\Table\\empty_row.html.twig");
    }
}

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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig */
class __TwigTemplate_37d72ef428086a94b211b97235aeee9742f848cf58873bfd1c6adc56298ef406 extends \Twig\Template
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
        // line 26
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", 26, "158349555")->display(twig_array_merge($context, ["id" => ($this->getAttribute(        // line 27
($context["grid"] ?? null), "id", []) . "_grid_delete_categories_modal"), "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What do you want to do with the products associated with this category?", [], "Admin.Catalog.Notification"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete", [], "Admin.Actions"), "class" => "btn btn-danger btn-lg js-submit-delete-categories"]]]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "C:\\xampp\\htdocs\\tienda\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Categories\\Blocks\\delete_categories_modal.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig */
class __TwigTemplate_37d72ef428086a94b211b97235aeee9742f848cf58873bfd1c6adc56298ef406___158349555 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", 26);
        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        // line 37
        echo "    <div class=\"modal-body\">";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCategoriesForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_categories_delete")]);
        echo "

      <div class=\"form-group mb-0\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCategoriesForm"] ?? null), "delete_mode", []), 'widget');
        echo "
      </div>

      <div class=\"d-none\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["deleteCategoriesForm"] ?? null), "categories_to_delete", []), 'widget');
        echo "
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 45,  99 => 41,  94 => 38,  92 => 37,  89 => 36,  72 => 26,  31 => 27,  30 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "C:\\xampp\\htdocs\\tienda\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Categories\\Blocks\\delete_categories_modal.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* project/evaluate.html.twig */
class __TwigTemplate_b47a9ba9545d86b55e41dcb12dcd8a8e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/evaluate.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Project Evaluation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 1rem;\">
    <h1>Evaluate Project: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 7, $this->source); })()), "project", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
    
    <div style=\"background: #f8f9fa; padding: 1rem; border-radius: 5px; margin: 1rem 0;\">
        <h3>Project Details</h3>
        <p><strong>Requester:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 11, $this->source); })()), "requester", [], "any", false, false, false, 11), "firstName", [], "any", false, false, false, 11), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 11, $this->source); })()), "requester", [], "any", false, false, false, 11), "lastName", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
        <p><strong>Project:</strong> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 12, $this->source); })()), "project", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        yield "</p>
        <p><strong>Description:</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 13, $this->source); })()), "project", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
        <p><strong>XP Value:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 14, $this->source); })()), "project", [], "any", false, false, false, 14), "xp", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
        <p><strong>Estimated Time:</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 15, $this->source); })()), "project", [], "any", false, false, false, 15), "estimatedTimeInHours", [], "any", false, false, false, 15), "html", null, true);
        yield " hours</p>
        
        ";
        // line 17
        if (((isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 17, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 17, $this->source); })()), "uploadedFilePath", [], "any", false, false, false, 17))) {
            // line 18
            yield "            <p><strong>Submitted File:</strong> 
                <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/project_files/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["userProject"]) || array_key_exists("userProject", $context) ? $context["userProject"] : (function () { throw new RuntimeError('Variable "userProject" does not exist.', 19, $this->source); })()), "uploadedFilePath", [], "any", false, false, false, 19))), "html", null, true);
            yield "\" target=\"_blank\" class=\"btn btn-sm btn-primary\">
                    📁 Download Project File
                </a>
            </p>
        ";
        }
        // line 24
        yield "    </div>

    <div style=\"margin: 2rem 0;\">
        <h3>Evaluation Decision</h3>
        <p>Please review the submitted project and decide whether it meets the requirements.</p>
        
        <div style=\"display: flex; gap: 1rem; margin-top: 1rem;\">
            <form action=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_evaluate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"approved\" value=\"1\">
                <button type=\"submit\" class=\"btn btn-success\" style=\"background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px;\">
                    ✅ Approve Project
                </button>
            </form>
            
            <form action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_evaluate", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"approved\" value=\"0\">
                <button type=\"submit\" class=\"btn btn-danger\" style=\"background: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 5px;\">
                    ❌ Reject Project
                </button>
            </form>
        </div>
        
        <div style=\"margin-top: 1rem; font-size: 0.9em; color: #666;\">
            <p><strong>Note:</strong> If you approve the project, the requester will receive ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 47, $this->source); })()), "project", [], "any", false, false, false, 47), "xp", [], "any", false, false, false, 47), "html", null, true);
        yield " XP points and the project will be marked as completed.</p>
            <p>If you reject the project, the requester will be able to resubmit their work after making improvements.</p>
        </div>
    </div>

    <div style=\"margin-top: 2rem;\">
        <a href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluations");
        yield "\" class=\"btn btn-secondary\">← Back to Evaluations</a>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "project/evaluate.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  171 => 53,  162 => 47,  150 => 38,  140 => 31,  131 => 24,  123 => 19,  120 => 18,  118 => 17,  113 => 15,  109 => 14,  105 => 13,  101 => 12,  95 => 11,  88 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Project Evaluation{% endblock %}

{% block body %}
<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 1rem;\">
    <h1>Evaluate Project: {{ evaluation.project.name }}</h1>
    
    <div style=\"background: #f8f9fa; padding: 1rem; border-radius: 5px; margin: 1rem 0;\">
        <h3>Project Details</h3>
        <p><strong>Requester:</strong> {{ evaluation.requester.firstName }} {{ evaluation.requester.lastName }}</p>
        <p><strong>Project:</strong> {{ evaluation.project.name }}</p>
        <p><strong>Description:</strong> {{ evaluation.project.description }}</p>
        <p><strong>XP Value:</strong> {{ evaluation.project.xp }}</p>
        <p><strong>Estimated Time:</strong> {{ evaluation.project.estimatedTimeInHours }} hours</p>
        
        {% if userProject and userProject.uploadedFilePath %}
            <p><strong>Submitted File:</strong> 
                <a href=\"{{ asset('uploads/project_files/' ~ userProject.uploadedFilePath) }}\" target=\"_blank\" class=\"btn btn-sm btn-primary\">
                    📁 Download Project File
                </a>
            </p>
        {% endif %}
    </div>

    <div style=\"margin: 2rem 0;\">
        <h3>Evaluation Decision</h3>
        <p>Please review the submitted project and decide whether it meets the requirements.</p>
        
        <div style=\"display: flex; gap: 1rem; margin-top: 1rem;\">
            <form action=\"{{ path('project_evaluate', { id: evaluation.id }) }}\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"approved\" value=\"1\">
                <button type=\"submit\" class=\"btn btn-success\" style=\"background: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px;\">
                    ✅ Approve Project
                </button>
            </form>
            
            <form action=\"{{ path('project_evaluate', { id: evaluation.id }) }}\" method=\"post\" style=\"display: inline;\">
                <input type=\"hidden\" name=\"approved\" value=\"0\">
                <button type=\"submit\" class=\"btn btn-danger\" style=\"background: #dc3545; color: white; padding: 10px 20px; border: none; border-radius: 5px;\">
                    ❌ Reject Project
                </button>
            </form>
        </div>
        
        <div style=\"margin-top: 1rem; font-size: 0.9em; color: #666;\">
            <p><strong>Note:</strong> If you approve the project, the requester will receive {{ evaluation.project.xp }} XP points and the project will be marked as completed.</p>
            <p>If you reject the project, the requester will be able to resubmit their work after making improvements.</p>
        </div>
    </div>

    <div style=\"margin-top: 2rem;\">
        <a href=\"{{ path('evaluations') }}\" class=\"btn btn-secondary\">← Back to Evaluations</a>
    </div>
</div>
{% endblock %}
", "project/evaluate.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/project/evaluate.html.twig");
    }
}

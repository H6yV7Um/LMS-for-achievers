<?php

class __Mustache_a411303a04889214492fc47d8b548d01 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<ul class="nav nav-tabs" role="tablist">
';
        $buffer .= $indent . '<!-- First the top most node and immediate children -->
';
        $buffer .= $indent . '    <li class="nav-item">
';
        $buffer .= $indent . '        <a class="nav-link active" href="#link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" data-toggle="tab" role="tab">';
        $value = $this->resolveValue($context->findDot('node.text'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '<!-- Now the first level children with sub nodes -->
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section1885727fd1e9d9431640e67b714d9976($context, $indent, $value);
        $buffer .= $indent . '</ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="tab-content">
';
        $buffer .= $indent . '    <div class="tab-pane active" id="link';
        $value = $this->resolveValue($context->findDot('node.key'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" role="tabpanel">
';
        $buffer .= $indent . '        <div class="card">
';
        $buffer .= $indent . '            <div class="card-block">
';
        $buffer .= $indent . '                <div class="container">
';
        $buffer .= $indent . '                    <div class="row">
';
        $buffer .= $indent . '                        <div class="col-sm-9 push-sm-3">
';
        $buffer .= $indent . '                            <ul class="list-unstyled">
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->sectionFd5c86c322418f9b55ad267f4db4a081($context, $indent, $value);
        $buffer .= $indent . '                            </ul>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->section1f3697e00ddc5a94b11dda01c10b2673($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        // 'node.children' section
        $value = $context->findDot('node.children');
        $buffer .= $this->sectionEd0e15119d220694667b86d3ae2837fe($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section26ee26c8016182704af3427a2bece7c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'is_short_branch' inverted section
                $value = $context->find('is_short_branch');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <li class="nav-item">
';
                    $buffer .= $indent . '                    <a class="nav-link" href="#link';
                    $value = $this->resolveValue($context->find('key'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '" data-toggle="tab" role="tab">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a>
';
                    $buffer .= $indent . '                </li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD86081dc90eb29b9b620fbd2d0c0355c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section26ee26c8016182704af3427a2bece7c3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1885727fd1e9d9431640e67b714d9976(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#children.count}}
        {{#display}}
            {{^is_short_branch}}
                <li class="nav-item">
                    <a class="nav-link" href="#link{{key}}" data-toggle="tab" role="tab">{{text}}</a>
                </li>
            {{/is_short_branch}}
        {{/display}}
    {{/children.count}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionD86081dc90eb29b9b620fbd2d0c0355c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a4990241d65c34a6d9e84efe8f48ff3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <li><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd5c86c322418f9b55ad267f4db4a081(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{^children.count}}
                                        {{#display}}
                                            <li><a href="{{{action}}}">{{text}}</a></li>
                                        {{/display}}
                                    {{/children.count}}
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    // 'display' section
                    $value = $context->find('display');
                    $buffer .= $this->section3a4990241d65c34a6d9e84efe8f48ff3($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6e367e371fcb0da95b962d4ad85c9dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h4><a href="{{action}}">{{text}}</a><h4>';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h4><a href="';
                $value = $this->resolveValue($context->find('action'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</a><h4>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD515a2da18fbbccd4f69b486e89c6f10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{> core/settings_link_page_single }}
                                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF817792f2b89033889ae42ef68fc05b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <hr>
';
                $buffer .= $indent . '                                    <div class="row">
';
                $buffer .= $indent . '                                        <div class="col-sm-3">
';
                $buffer .= $indent . '                                            ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                        <div class="col-sm-9">
';
                $buffer .= $indent . '                                            <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->sectionD515a2da18fbbccd4f69b486e89c6f10($context, $indent, $value);
                $buffer .= $indent . '                                            </ul>
';
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf8699f4456eababb81db25f6f88e002(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#is_short_branch}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/is_short_branch}}
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'is_short_branch' section
                $value = $context->find('is_short_branch');
                $buffer .= $this->sectionF817792f2b89033889ae42ef68fc05b1($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd56e4187b85874c0cd65d7c01e6c982(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#children.count}}
                                {{#is_short_branch}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/is_short_branch}}
                            {{/children.count}}
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->sectionFf8699f4456eababb81db25f6f88e002($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f3697e00ddc5a94b11dda01c10b2673(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#display}}
                            {{#children.count}}
                                {{#is_short_branch}}
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                            {{^action}}<h4>{{text}}<h4>{{/action}}
                                        </div>
                                        <div class="col-sm-9">
                                            <ul class="list-unstyled">
                                                {{#children}}
                                                    {{> core/settings_link_page_single }}
                                                {{/children}}
                                            </ul>
                                        </div>
                                    </div>
                                {{/is_short_branch}}
                            {{/children.count}}
                        {{/display}}
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->sectionCd56e4187b85874c0cd65d7c01e6c982($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4fc3f6031eaf16be74cccfcb5dfb2d4d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
                                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'children.count' inverted section
                $value = $context->findDot('children.count');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                    <li><a href="';
                    $value = $this->resolveValue($context->find('action'), $context);
                    $buffer .= $value;
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section258fbf573db3f9f61af298379795b6c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            {{#display}}
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
                                            {{/display}}
                                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section4fc3f6031eaf16be74cccfcb5dfb2d4d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb54f814185d6ce0253115368479958c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                        {{> core/settings_link_page_single }}
                                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/settings_link_page_single')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34119419b317e676eb2ff9ef54e80905(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <hr>
';
                $buffer .= $indent . '                                        <div class="row">
';
                $buffer .= $indent . '                                            <div class="col-sm-3">
';
                $buffer .= $indent . '                                                ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                            <div class="col-sm-9">
';
                $buffer .= $indent . '                                                <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->sectionAb54f814185d6ce0253115368479958c($context, $indent, $value);
                $buffer .= $indent . '                                                </ul>
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section560b60c199703a82fbcdc46bfa4ca5e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
                                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->section34119419b317e676eb2ff9ef54e80905($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section930a2db5fee23a43fbf8da4e9cab58db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#display}}
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
                                {{/display}}
                            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'display' section
                $value = $context->find('display');
                $buffer .= $this->section560b60c199703a82fbcdc46bfa4ca5e3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ea2f49ac39f6ccc13641cdab2086a48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="card">
                    <div class="card-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col-sm-9">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{#display}}
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
                                            {{/display}}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                            {{#children}}
                                {{#display}}
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
                                {{/display}}
                            {{/children}}
                        </div>
                    </div>
                </div>
            </div>
        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="tab-pane" id="link';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '" role="tabpanel">
';
                $buffer .= $indent . '                <div class="card">
';
                $buffer .= $indent . '                    <div class="card-block">
';
                $buffer .= $indent . '                        <div class="container">
';
                $buffer .= $indent . '                            <div class="row">
';
                $buffer .= $indent . '                                <div class="col-sm-3">
';
                $buffer .= $indent . '                                    ';
                // 'action' section
                $value = $context->find('action');
                $buffer .= $this->sectionB6e367e371fcb0da95b962d4ad85c9dc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                // 'action' inverted section
                $value = $context->find('action');
                if (empty($value)) {
                    
                    $buffer .= '<h4>';
                    $value = $this->resolveValue($context->find('text'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '<h4>';
                }
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                                <div class="col-sm-9">
';
                $buffer .= $indent . '                                    <ul class="list-unstyled">
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section258fbf573db3f9f61af298379795b6c1($context, $indent, $value);
                $buffer .= $indent . '                                    </ul>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                // 'children' section
                $value = $context->find('children');
                $buffer .= $this->section930a2db5fee23a43fbf8da4e9cab58db($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd0e15119d220694667b86d3ae2837fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#children.count}}
            <div class="tab-pane" id="link{{key}}" role="tabpanel">
                <div class="card">
                    <div class="card-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                    {{^action}}<h4>{{text}}<h4>{{/action}}
                                </div>
                                <div class="col-sm-9">
                                    <ul class="list-unstyled">
                                        {{#children}}
                                            {{#display}}
                                                {{^children.count}}
                                                    <li><a href="{{{action}}}">{{text}}</a></li>
                                                {{/children.count}}
                                            {{/display}}
                                        {{/children}}
                                    </ul>
                                </div>
                            </div>
                            {{#children}}
                                {{#display}}
                                    {{#children.count}}
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{#action}}<h4><a href="{{action}}">{{text}}</a><h4>{{/action}}
                                                {{^action}}<h4>{{text}}<h4>{{/action}}
                                            </div>
                                            <div class="col-sm-9">
                                                <ul class="list-unstyled">
                                                    {{#children}}
                                                        {{> core/settings_link_page_single }}
                                                    {{/children}}
                                                </ul>
                                            </div>
                                        </div>
                                    {{/children.count}}
                                {{/display}}
                            {{/children}}
                        </div>
                    </div>
                </div>
            </div>
        {{/children.count}}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                // 'children.count' section
                $value = $context->findDot('children.count');
                $buffer .= $this->section2ea2f49ac39f6ccc13641cdab2086a48($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

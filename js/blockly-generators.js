/**
 * NeuraEdu Visual Learning Lab - Code Generators
 * Wrapped in a function - called AFTER Blockly + javascript generator are loaded
 */

window.registerVLLGenerators = function () {

var gen = javascript.javascriptGenerator;
var Order = javascript.Order;

// EVENTS
gen.forBlock['event_flag'] = function () { return ''; };
gen.forBlock['event_start'] = function () { return ''; };
gen.forBlock['event_on_key'] = function (block) { return ''; };
gen.forBlock['event_sprite_clicked'] = function () { return ''; };

// MOTION
gen.forBlock['motion_move'] = function (block) { return 'await VLLStage.moveSteps(' + block.getFieldValue('STEPS') + ');\n'; };
gen.forBlock['motion_turn_right'] = function (block) { return 'VLLStage.turnRight(' + block.getFieldValue('DEGREES') + ');\n'; };
gen.forBlock['motion_turn_left'] = function (block) { return 'VLLStage.turnLeft(' + block.getFieldValue('DEGREES') + ');\n'; };
gen.forBlock['motion_goto_xy'] = function (block) { return 'VLLStage.goTo(' + block.getFieldValue('X') + ', ' + block.getFieldValue('Y') + ');\n'; };
gen.forBlock['motion_goto_random'] = function () { return 'VLLStage.goToRandom();\n'; };
gen.forBlock['motion_glide'] = function (block) { return 'await VLLStage.glideTo(' + block.getFieldValue('SECS') + ', ' + block.getFieldValue('X') + ', ' + block.getFieldValue('Y') + ');\n'; };
gen.forBlock['motion_point_dir'] = function (block) { return 'VLLStage.pointDirection(' + block.getFieldValue('DIR') + ');\n'; };
gen.forBlock['motion_change_x'] = function (block) { return 'VLLStage.changeX(' + block.getFieldValue('DX') + ');\n'; };
gen.forBlock['motion_change_y'] = function (block) { return 'VLLStage.changeY(' + block.getFieldValue('DY') + ');\n'; };
gen.forBlock['motion_set_x'] = function (block) { return 'VLLStage.setX(' + block.getFieldValue('X') + ');\n'; };
gen.forBlock['motion_set_y'] = function (block) { return 'VLLStage.setY(' + block.getFieldValue('Y') + ');\n'; };
gen.forBlock['motion_bounce_edge'] = function () { return 'VLLStage.bounceEdge();\n'; };
gen.forBlock['motion_x_pos'] = function () {
    return "var _xp = Math.round(VLLStage.getSprite().x);\nvllConsole('success', 'x = ' + _xp);\nVLLStage.say('x = ' + _xp);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['motion_y_pos'] = function () {
    return "var _yp = Math.round(VLLStage.getSprite().y);\nvllConsole('success', 'y = ' + _yp);\nVLLStage.say('y = ' + _yp);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['motion_direction'] = function () {
    return "var _dir = Math.round(VLLStage.getSprite().direction);\nvllConsole('success', 'direction = ' + _dir);\nVLLStage.say('dir = ' + _dir);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

// LOOKS
gen.forBlock['looks_say_timed'] = function (block) {
    var m = block.getFieldValue('MSG').replace(/'/g, "\\'");
    return "VLLStage.say('" + m + "');\nawait new Promise(function(r){setTimeout(r," + (block.getFieldValue('SECS') * 1000) + ")});\nVLLStage.say('');\n";
};
gen.forBlock['looks_say'] = function (block) { return "VLLStage.say('" + block.getFieldValue('MSG').replace(/'/g, "\\'") + "');\n"; };
gen.forBlock['looks_think'] = function (block) { return "VLLStage.think('" + block.getFieldValue('MSG').replace(/'/g, "\\'") + "');\n"; };
gen.forBlock['looks_show'] = function () { return 'VLLStage.showSprite();\n'; };
gen.forBlock['looks_hide'] = function () { return 'VLLStage.hideSprite();\n'; };
gen.forBlock['looks_change_size'] = function (block) { return 'VLLStage.changeSizeBy(' + block.getFieldValue('CHANGE') + ');\n'; };
gen.forBlock['looks_set_size'] = function (block) { return 'VLLStage.setSize(' + block.getFieldValue('SIZE') + ');\n'; };
gen.forBlock['looks_set_color'] = function (block) { return "VLLStage.setSpriteColor('" + block.getFieldValue('COLOR') + "');\n"; };
gen.forBlock['looks_next_costume'] = function () { return 'VLLStage.nextCostume();\n'; };
gen.forBlock['looks_set_costume'] = function (block) { return "VLLStage.setCostume('" + block.getFieldValue('COSTUME') + "');\n"; };
gen.forBlock['looks_set_backdrop'] = function (block) { return "VLLStage.setBackdrop('" + block.getFieldValue('BACKDROP') + "');\n"; };
gen.forBlock['looks_size'] = function () {
    return "var _sz = VLLStage.getSprite().size;\nvllConsole('success', 'Size = ' + _sz + '%');\nVLLStage.say('Size: ' + _sz + '%');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

// SOUND
gen.forBlock['sound_play'] = function (block) { return "await VLLStage.playSound('" + block.getFieldValue('SOUND') + "');\n"; };
gen.forBlock['sound_play_note'] = function (block) { return 'await VLLStage.playNote(' + block.getFieldValue('NOTE') + ', ' + block.getFieldValue('BEATS') + ');\n'; };
gen.forBlock['sound_set_volume'] = function (block) { return 'VLLStage.setVolume(' + block.getFieldValue('VOL') + ');\n'; };

// PEN
gen.forBlock['pen_down'] = function () { return 'VLLStage.penDown();\n'; };
gen.forBlock['pen_up'] = function () { return 'VLLStage.penUp();\n'; };
gen.forBlock['pen_clear'] = function () { return 'VLLStage.penClear();\n'; };
gen.forBlock['pen_stamp'] = function () { return 'VLLStage.stamp();\n'; };
gen.forBlock['pen_set_color'] = function (block) { return "VLLStage.setPenColor('" + block.getFieldValue('COLOR') + "');\n"; };
gen.forBlock['pen_set_size'] = function (block) { return 'VLLStage.setPenSize(' + block.getFieldValue('SIZE') + ');\n'; };

// SENSING
gen.forBlock['sensing_touching_edge'] = function () {
    return "var _te = VLLStage.isTouchingEdge();\nvllConsole('success', 'Touching edge: ' + _te);\nVLLStage.say('Edge: ' + _te);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['sensing_mouse_x'] = function () {
    return "var _mx = VLLStage.mouseX();\nvllConsole('success', 'Mouse X: ' + _mx);\nVLLStage.say('Mouse X: ' + _mx);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['sensing_mouse_y'] = function () {
    return "var _my = VLLStage.mouseY();\nvllConsole('success', 'Mouse Y: ' + _my);\nVLLStage.say('Mouse Y: ' + _my);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['sensing_mouse_down'] = function () {
    return "var _md = VLLStage.isMouseDown();\nvllConsole('success', 'Mouse down: ' + _md);\nVLLStage.say('Mouse: ' + _md);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['sensing_key_pressed'] = function (block) {
    var key = block.getFieldValue('KEY').replace(/'/g, "\\'");
    return "var _kp = VLLStage.isKeyPressed('" + key + "');\nvllConsole('success', 'Key pressed: ' + _kp);\nVLLStage.say('Key: ' + _kp);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['sensing_ask'] = function (block) {
    var q = block.getFieldValue('QUESTION').replace(/'/g, "\\'");
    return "VLLStage.say('" + q + "');\nvllVars['__answer'] = await vllPrompt('" + q + "');\nVLLStage.say('');\nvllConsole('info', 'Answer: ' + vllVars['__answer']);\n";
};
gen.forBlock['sensing_answer'] = function () {
    return "var _ans = vllVars['__answer'] || '';\nvllConsole('success', 'Answer: ' + _ans);\nVLLStage.say('Answer: ' + _ans);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['sensing_timer'] = function () {
    return "var _tm = VLLStage.getTimer();\nvllConsole('success', 'Timer: ' + _tm + 's');\nVLLStage.say('Timer: ' + _tm + 's');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['sensing_reset_timer'] = function () { return 'VLLStage.resetTimer();\n'; };
gen.forBlock['sensing_distance_to'] = function (block) {
    var t = block.getFieldValue('TARGET');
    return "var _dt = VLLStage.distanceTo('" + t + "');\nvllConsole('success', 'Distance to " + t + ": ' + _dt);\nVLLStage.say('Distance: ' + _dt);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

// AI
gen.forBlock['ai_ask'] = function (block) {
    var q = gen.valueToCode(block, 'QUESTION', Order.NONE) || "''";
    return ['await vllAskAI(' + q + ')', Order.AWAIT];
};
gen.forBlock['ai_ask_simple'] = function (block) {
    var q = block.getFieldValue('QUESTION').replace(/\\/g, '\\\\').replace(/'/g, "\\'");
    return "vllConsole('info', 'Asking AI: " + q + "');\nvar aiResponse = await vllAskAI('" + q + "');\nvllConsole('ai', aiResponse);\n";
};
gen.forBlock['ai_summarize'] = function (block) {
    var t = gen.valueToCode(block, 'TEXT', Order.NONE) || "''";
    return ["await vllAskAI('Summarize concisely: ' + " + t + ")", Order.AWAIT];
};
gen.forBlock['ai_translate'] = function (block) {
    var l = block.getFieldValue('LANG');
    var t = gen.valueToCode(block, 'TEXT', Order.NONE) || "''";
    return ["await vllAskAI('Translate to " + l + ": ' + " + t + ")", Order.AWAIT];
};

// LEARNING
gen.forBlock['learn_generate_quiz'] = function (block) {
    var tp = block.getFieldValue('TOPIC').replace(/'/g, "\\'");
    var c = block.getFieldValue('COUNT'), d = block.getFieldValue('DIFFICULTY');
    return "vllConsole('info', 'Generating " + c + " " + d + " quiz on \"" + tp + "\"...');\nvar qr = await vllAskAI('Generate " + c + " " + d + " quiz questions about \"" + tp + "\". Each: question, 4 options A-D, correct answer.');\nvllConsole('ai', qr);\n";
};
gen.forBlock['learn_flashcard'] = function (block) {
    var f = block.getFieldValue('FRONT').replace(/'/g, "\\'"), b = block.getFieldValue('BACK').replace(/'/g, "\\'");
    return "vllConsole('success', '--- FLASHCARD ---');\nvllConsole('log', 'Q: " + f + "');\nvllConsole('log', 'A: " + b + "');\nvllConsole('success', '-----------------');\n";
};
gen.forBlock['learn_explain_topic'] = function (block) {
    var tp = block.getFieldValue('TOPIC').replace(/'/g, "\\'"), lv = block.getFieldValue('LEVEL');
    return "vllConsole('info', 'Explaining \"" + tp + "\"...');\nvar ex = await vllAskAI('Explain \"" + tp + "\" at " + lv + " level with examples.');\nvllConsole('ai', ex);\n";
};
gen.forBlock['learn_define_word'] = function (block) {
    var w = block.getFieldValue('WORD').replace(/'/g, "\\'");
    return "vllConsole('info', 'Defining: " + w + "');\nvar def = await vllAskAI('Define \"" + w + "\": definition, part of speech, example.');\nvllConsole('ai', def);\n";
};

// ACTIONS
gen.forBlock['action_show_message'] = function (block) { var m = gen.valueToCode(block, 'MSG', Order.NONE) || "''"; return 'vllConsole("log", ' + m + ');\n'; };
gen.forBlock['action_show_message_simple'] = function (block) { return "vllConsole('log', '" + block.getFieldValue('MSG').replace(/'/g, "\\'") + "');\n"; };
gen.forBlock['action_alert'] = function (block) { var m = gen.valueToCode(block, 'MSG', Order.NONE) || "''"; return 'vllConsole("warn", "Alert: " + ' + m + ');\nVLLStage.say(' + m + ');\n'; };
gen.forBlock['action_prompt'] = function (block) {
    var q = block.getFieldValue('PROMPT_TEXT').replace(/'/g, "\\'");
    return "VLLStage.say('" + q + "');\nvar _pv = await vllPrompt('" + q + "');\nVLLStage.say('You said: ' + _pv);\nvllConsole('success', 'Answer: ' + _pv);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['action_wait'] = function (block) { return 'await new Promise(function(r){setTimeout(r,' + Math.round(block.getFieldValue('SECONDS') * 1000) + ')});\n'; };
gen.forBlock['action_set_variable'] = function (block) {
    var n = block.getFieldValue('VAR_NAME'), v = gen.valueToCode(block, 'VALUE', Order.NONE) || "''";
    return "vllVars['" + n + "'] = " + v + ";\n";
};
gen.forBlock['action_get_variable'] = function (block) {
    var n = block.getFieldValue('VAR_NAME');
    return "var _gv = vllVars['" + n + "'] || '';\nvllConsole('success', '" + n + " = ' + _gv);\nVLLStage.say('" + n + " = ' + _gv);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

// LOGIC
gen.forBlock['logic_if_else'] = function (block) {
    var c = gen.valueToCode(block, 'CONDITION', Order.NONE) || 'false';
    return 'if (' + c + ') {\n' + gen.statementToCode(block, 'DO') + '} else {\n' + gen.statementToCode(block, 'ELSE') + '}\n';
};
gen.forBlock['logic_compare'] = function (block) {
    var ops = { EQ: '==', NEQ: '!=', GT: '>', LT: '<', GTE: '>=', LTE: '<=' };
    var dispOps = { EQ: '=', NEQ: '\u2260', GT: '>', LT: '<', GTE: '\u2265', LTE: '\u2264' };
    var a = block.getFieldValue('A'), b = block.getFieldValue('B'), op = block.getFieldValue('OP');
    return "var _cmp = (" + a + " " + ops[op] + " " + b + ");\nvllConsole('success', '" + a + " " + dispOps[op] + " " + b + " = ' + _cmp);\nVLLStage.say('" + a + " " + dispOps[op] + " " + b + " = ' + _cmp);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['logic_boolean'] = function (block) {
    var v = block.getFieldValue('BOOL') === 'TRUE' ? 'true' : 'false';
    return "vllConsole('success', '" + v + "');\nVLLStage.say('" + v + "');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['logic_not'] = function (block) {
    var v = block.getFieldValue('BOOL') === 'TRUE';
    var result = !v;
    return "vllConsole('success', 'not " + v + " = " + result + "');\nVLLStage.say('not " + v + " = " + result + "');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['logic_and_or'] = function (block) {
    var a = block.getFieldValue('A') === 'TRUE', b = block.getFieldValue('B') === 'TRUE';
    var op = block.getFieldValue('OP');
    var result = op === 'AND' ? (a && b) : (a || b);
    var opWord = op.toLowerCase();
    return "vllConsole('success', '" + a + " " + opWord + " " + b + " = " + result + "');\nVLLStage.say('" + a + " " + opWord + " " + b + " = " + result + "');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

// LOOPS
gen.forBlock['loop_repeat'] = function (block) {
    var t = block.getFieldValue('TIMES'), c = gen.statementToCode(block, 'DO');
    return 'for (var vll_i = 0; vll_i < ' + t + '; vll_i++) {\n  if (window._vllStopped) break;\n  vllVars["__loopCount"] = vll_i + 1;\n' + c + '  await new Promise(function(r){setTimeout(r,0)});\n}\n';
};
gen.forBlock['loop_forever'] = function (block) {
    return 'while (!window._vllStopped) {\n' + gen.statementToCode(block, 'DO') + '  await new Promise(function(r){setTimeout(r,16)});\n}\n';
};
gen.forBlock['loop_while'] = function (block) {
    var c = gen.valueToCode(block, 'CONDITION', Order.NONE) || 'false', code = gen.statementToCode(block, 'DO');
    return 'var vll_s = 0;\nwhile ((' + c + ') && !window._vllStopped && vll_s < 10000) {\n  vll_s++;\n' + code + '  await new Promise(function(r){setTimeout(r,0)});\n}\n';
};
gen.forBlock['loop_for_each'] = function (block) {
    var list = gen.valueToCode(block, 'LIST', Order.NONE) || '[]', code = gen.statementToCode(block, 'DO');
    return 'var vll_list = ' + list + ';\nfor (var vll_j = 0; vll_j < vll_list.length && !window._vllStopped; vll_j++) {\n  vllVars["__loopCount"] = vll_j + 1;\n  vllVars["__currentItem"] = vll_list[vll_j];\n' + code + '  await new Promise(function(r){setTimeout(r,0)});\n}\n';
};
gen.forBlock['loop_count_variable'] = function () {
    return "var _lc = vllVars['__loopCount'] || 1;\nvllConsole('success', 'Count: ' + _lc);\nVLLStage.say('Count: ' + _lc);\nawait new Promise(function(r){setTimeout(r,2000)});\nVLLStage.say('');\n";
};

// TEXT
gen.forBlock['text_value'] = function (block) {
    var t = block.getFieldValue('TEXT').replace(/\\/g, '\\\\').replace(/'/g, "\\'");
    return "vllConsole('success', '" + t + "');\nVLLStage.say('" + t + "');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['text_join'] = function (block) {
    var a = block.getFieldValue('A').replace(/'/g, "\\'"), b = block.getFieldValue('B').replace(/'/g, "\\'");
    return "var _tj = '" + a + "' + '" + b + "';\nvllConsole('success', _tj);\nVLLStage.say(_tj);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['text_length'] = function (block) {
    var t = block.getFieldValue('TEXT').replace(/'/g, "\\'");
    return "var _tl = '" + t + "'.length;\nvllConsole('success', 'Length of \"" + t + "\" = ' + _tl);\nVLLStage.say('Length: ' + _tl);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['text_uppercase'] = function (block) {
    var t = block.getFieldValue('TEXT').replace(/'/g, "\\'");
    return "var _tu = '" + t + "'.toUpperCase();\nvllConsole('success', _tu);\nVLLStage.say(_tu);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['text_lowercase'] = function (block) {
    var t = block.getFieldValue('TEXT').replace(/'/g, "\\'");
    return "var _tl2 = '" + t + "'.toLowerCase();\nvllConsole('success', _tl2);\nVLLStage.say(_tl2);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['text_reverse'] = function (block) {
    var t = block.getFieldValue('TEXT').replace(/'/g, "\\'");
    return "var _tr = '" + t + "'.split('').reverse().join('');\nvllConsole('success', _tr);\nVLLStage.say(_tr);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['text_contains'] = function (block) {
    var t = block.getFieldValue('TEXT').replace(/'/g, "\\'"), s = block.getFieldValue('SEARCH').replace(/'/g, "\\'");
    return "var _tc = '" + t + "'.includes('" + s + "');\nvllConsole('success', 'Contains \"" + s + "\": ' + (_tc ? 'Yes!' : 'No'));\nVLLStage.say(_tc ? 'Yes! Found it' : 'No, not found');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

// MATH
gen.forBlock['math_number'] = function (block) {
    var n = block.getFieldValue('NUM');
    return "vllConsole('success', 'Number: " + n + "');\nVLLStage.say('" + n + "');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['math_operation'] = function (block) {
    var ops = { ADD: ['+', Order.ADDITION], SUB: ['-', Order.SUBTRACTION], MUL: ['*', Order.MULTIPLICATION], DIV: ['/', Order.DIVISION], MOD: ['%', Order.MODULUS], POW: ['**', Order.EXPONENTIATION] };
    var op = ops[block.getFieldValue('OP')];
    return ['(' + (gen.valueToCode(block, 'A', op[1]) || '0') + ' ' + op[0] + ' ' + (gen.valueToCode(block, 'B', op[1]) || '0') + ')', op[1]];
};
gen.forBlock['math_random'] = function (block) {
    var min = block.getFieldValue('MIN'), max = block.getFieldValue('MAX');
    return "var _rnd = Math.floor(Math.random() * (" + max + " - " + min + " + 1)) + " + min + ";\nvllConsole('success', 'Random (" + min + "-" + max + "): ' + _rnd);\nVLLStage.say('Random: ' + _rnd);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['math_round'] = function (block) {
    var op = block.getFieldValue('OP'), num = block.getFieldValue('NUM');
    return "var _rv = Math." + op + "(" + num + ");\nvllConsole('success', '" + op + "(" + num + ") = ' + _rv);\nVLLStage.say('" + op + "(" + num + ") = ' + _rv);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};
gen.forBlock['math_abs'] = function (block) {
    var num = block.getFieldValue('NUM');
    return "var _av = Math.abs(" + num + ");\nvllConsole('success', 'abs(" + num + ") = ' + _av);\nVLLStage.say('abs(" + num + ") = ' + _av);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

// Calculate & show result in console + speech bubble
// Quick calc: two inline numbers + operator, sprite says result for 5 sec
gen.forBlock['math_calc'] = function (block) {
    var a = block.getFieldValue('A');
    var op = block.getFieldValue('OP');
    var b = block.getFieldValue('B');
    var dispOp = op === '*' ? '\u00D7' : op === '/' ? '\u00F7' : op === '**' ? '^' : op === '%' ? 'mod' : op;
    return "var _a = " + a + ", _b = " + b + ";\nvar _r = _a " + op + " _b;\n_r = Math.round(_r * 1000) / 1000;\nvllConsole('success', '" + a + " " + dispOp + " " + b + " = ' + _r);\nVLLStage.say('" + a + " " + dispOp + " " + b + " = ' + _r);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['math_print'] = function (block) {
    var val = block.getFieldValue('VALUE');
    return 'var _result = ' + val + ';\nvllConsole("success", "Result: " + _result);\nVLLStage.say("= " + _result);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say("");\n';
};

// Quick solve: type math expression directly
gen.forBlock['math_quick'] = function (block) {
    var expr = block.getFieldValue('EXPR').replace(/\\/g, '\\\\').replace(/'/g, "\\'");
    return "try {\n  var _qr = eval('" + expr + "');\n  vllConsole('success', '" + expr + " = ' + _qr);\n  VLLStage.say('= ' + _qr);\n  await new Promise(function(r){setTimeout(r,5000)});\n  VLLStage.say('');\n} catch(e) {\n  vllConsole('error', 'Math error: ' + e.message);\n}\n";
};

// LISTS
// Helper: parse comma-separated list field into JS array string
function listFromField(block, field) {
    return '[' + block.getFieldValue(field).split(',').map(function (s) { return "'" + s.trim().replace(/'/g, "\\'") + "'"; }).join(', ') + ']';
}

gen.forBlock['list_create'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    return "var _list = " + items + ";\nvllConsole('success', 'List: ' + _list.join(', '));\nVLLStage.say(_list.join(', '));\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['list_length'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    return "var _ll = " + items + ".length;\nvllConsole('success', 'List has ' + _ll + ' items');\nVLLStage.say('Count: ' + _ll);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['list_get_item'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    var idx = block.getFieldValue('INDEX');
    return "var _gi = " + items + "[" + idx + " - 1] || 'not found';\nvllConsole('success', 'Item #" + idx + ": ' + _gi);\nVLLStage.say('Item #" + idx + ": ' + _gi);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['list_add_item'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    var item = block.getFieldValue('ITEM').replace(/'/g, "\\'");
    return "var _la = " + items + ";\n_la.push('" + item + "');\nvllConsole('success', 'Added \"" + item + "\": ' + _la.join(', '));\nVLLStage.say(_la.join(', '));\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['list_contains'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    var search = block.getFieldValue('SEARCH').replace(/'/g, "\\'");
    return "var _lc = " + items + ".includes('" + search + "');\nvllConsole('success', 'Contains \"" + search + "\": ' + (_lc ? 'Yes!' : 'No'));\nVLLStage.say(_lc ? 'Yes! Found \"" + search + "\"' : 'No, not found');\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['list_reverse'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    return "var _lr = " + items + ".reverse();\nvllConsole('success', 'Reversed: ' + _lr.join(', '));\nVLLStage.say(_lr.join(', '));\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['list_sort'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    return "var _ls = " + items + ".sort();\nvllConsole('success', 'Sorted: ' + _ls.join(', '));\nVLLStage.say(_ls.join(', '));\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

gen.forBlock['list_join'] = function (block) {
    var items = listFromField(block, 'ITEMS');
    var sep = block.getFieldValue('SEP').replace(/'/g, "\\'");
    return "var _lj = " + items + ".join('" + sep + "');\nvllConsole('success', 'Joined: ' + _lj);\nVLLStage.say(_lj);\nawait new Promise(function(r){setTimeout(r,5000)});\nVLLStage.say('');\n";
};

console.log('[VLL] Code generators registered');

}; // end registerVLLGenerators

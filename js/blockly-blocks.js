/**
 * NeuraEdu Visual Learning Lab - Custom Block Definitions
 * Wrapped in a function to ensure Blockly is loaded before registration
 */

window.registerVLLBlocks = function () {

// ============================================
//  CATEGORY: EVENTS
// ============================================

Blockly.Blocks['event_flag'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%2306d6a0'%3E%3Cpath d='M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z'/%3E%3C/svg%3E", 20, 20))
            .appendField('When green flag clicked');
        this.setNextStatement(true, null);
        this.setColour('#06d6a0');
        this.setTooltip('Runs when you click the green flag');
    }
};

Blockly.Blocks['event_start'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M8 5v14l11-7z'/%3E%3C/svg%3E", 18, 18))
            .appendField('When program starts');
        this.setNextStatement(true, null);
        this.setColour('#06d6a0');
        this.setTooltip('This block runs when you click Run');
    }
};

Blockly.Blocks['event_on_key'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('When key')
            .appendField(new Blockly.FieldDropdown([
                ['space', ' '], ['up arrow', 'ArrowUp'], ['down arrow', 'ArrowDown'],
                ['left arrow', 'ArrowLeft'], ['right arrow', 'ArrowRight'],
                ['a', 'a'], ['b', 'b'], ['c', 'c'], ['d', 'd'], ['w', 'w'], ['s', 's']
            ]), 'KEY')
            .appendField('pressed');
        this.setNextStatement(true, null);
        this.setColour('#06d6a0');
    }
};

Blockly.Blocks['event_sprite_clicked'] = {
    init: function () {
        this.appendDummyInput().appendField('When this sprite clicked');
        this.setNextStatement(true, null);
        this.setColour('#06d6a0');
    }
};

// ============================================
//  CATEGORY: MOTION
// ============================================

Blockly.Blocks['motion_move'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('move')
            .appendField(new Blockly.FieldNumber(10, -1000, 1000), 'STEPS')
            .appendField('steps');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#4C97FF');
        this.setTooltip('Move sprite forward');
    }
};

Blockly.Blocks['motion_turn_right'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('turn')
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M15.55 5.55L11 1v3.07C7.06 4.56 4 7.92 4 12s3.05 7.44 7 7.93v-2.02c-2.84-.48-5-2.94-5-5.91s2.16-5.43 5-5.91V10l4.55-4.45z'/%3E%3C/svg%3E", 16, 16))
            .appendField(new Blockly.FieldNumber(15, -360, 360), 'DEGREES')
            .appendField('degrees');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_turn_left'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('turn')
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M12.5 8c-2.65 0-5.05.99-6.9 2.6L2 7v9h9l-3.62-3.62c1.39-1.16 3.16-1.88 5.12-1.88 3.54 0 6.55 2.31 7.6 5.5l2.37-.78C21.08 11.03 17.15 8 12.5 8z'/%3E%3C/svg%3E", 16, 16))
            .appendField(new Blockly.FieldNumber(15, -360, 360), 'DEGREES')
            .appendField('degrees');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_goto_xy'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('go to x:')
            .appendField(new Blockly.FieldNumber(0, -240, 240), 'X')
            .appendField('y:')
            .appendField(new Blockly.FieldNumber(0, -180, 180), 'Y');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_goto_random'] = {
    init: function () {
        this.appendDummyInput().appendField('go to random position');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_glide'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('glide')
            .appendField(new Blockly.FieldNumber(1, 0.1, 30, 0.1), 'SECS')
            .appendField('secs to x:')
            .appendField(new Blockly.FieldNumber(0, -240, 240), 'X')
            .appendField('y:')
            .appendField(new Blockly.FieldNumber(0, -180, 180), 'Y');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_point_dir'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('point in direction')
            .appendField(new Blockly.FieldNumber(90, -360, 360), 'DIR');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_change_x'] = {
    init: function () {
        this.appendDummyInput().appendField('change x by').appendField(new Blockly.FieldNumber(10, -500, 500), 'DX');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_change_y'] = {
    init: function () {
        this.appendDummyInput().appendField('change y by').appendField(new Blockly.FieldNumber(10, -500, 500), 'DY');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_set_x'] = {
    init: function () {
        this.appendDummyInput().appendField('set x to').appendField(new Blockly.FieldNumber(0, -240, 240), 'X');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_set_y'] = {
    init: function () {
        this.appendDummyInput().appendField('set y to').appendField(new Blockly.FieldNumber(0, -180, 180), 'Y');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_bounce_edge'] = {
    init: function () {
        this.appendDummyInput().appendField('if on edge, bounce');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF');
    }
};

Blockly.Blocks['motion_x_pos'] = {
    init: function () { this.appendDummyInput().appendField('show x position'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF'); }
};
Blockly.Blocks['motion_y_pos'] = {
    init: function () { this.appendDummyInput().appendField('show y position'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF'); }
};
Blockly.Blocks['motion_direction'] = {
    init: function () { this.appendDummyInput().appendField('show direction'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4C97FF'); }
};

// ============================================
//  CATEGORY: LOOKS
// ============================================

Blockly.Blocks['looks_say_timed'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('say').appendField(new Blockly.FieldTextInput('Hello!'), 'MSG')
            .appendField('for').appendField(new Blockly.FieldNumber(2, 0.1, 60, 0.1), 'SECS').appendField('seconds');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_say'] = {
    init: function () {
        this.appendDummyInput().appendField('say').appendField(new Blockly.FieldTextInput('Hello!'), 'MSG');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_think'] = {
    init: function () {
        this.appendDummyInput().appendField('think').appendField(new Blockly.FieldTextInput('Hmm...'), 'MSG');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_show'] = {
    init: function () { this.appendDummyInput().appendField('show'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF'); }
};
Blockly.Blocks['looks_hide'] = {
    init: function () { this.appendDummyInput().appendField('hide'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF'); }
};

Blockly.Blocks['looks_change_size'] = {
    init: function () {
        this.appendDummyInput().appendField('change size by').appendField(new Blockly.FieldNumber(10, -500, 500), 'CHANGE');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_set_size'] = {
    init: function () {
        this.appendDummyInput().appendField('set size to').appendField(new Blockly.FieldNumber(100, 1, 500), 'SIZE').appendField('%');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_set_color'] = {
    init: function () {
        this.appendDummyInput().appendField('set sprite color')
            .appendField(new Blockly.FieldDropdown([
                ['blue', '#4361ee'], ['red', '#ef476f'], ['green', '#06d6a0'],
                ['yellow', '#ffd166'], ['purple', '#7209b7'], ['orange', '#ff6b35'],
                ['pink', '#f72585'], ['cyan', '#48bfe3'], ['white', '#ffffff']
            ]), 'COLOR');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_next_costume'] = {
    init: function () { this.appendDummyInput().appendField('next costume'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF'); }
};

Blockly.Blocks['looks_set_costume'] = {
    init: function () {
        this.appendDummyInput().appendField('switch costume to')
            .appendField(new Blockly.FieldDropdown([
                ['cat', 'cat'], ['robot', 'robot'], ['rocket', 'rocket'],
                ['star', 'star'], ['ball', 'ball'], ['arrow', 'arrow']
            ]), 'COSTUME');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_set_backdrop'] = {
    init: function () {
        this.appendDummyInput().appendField('switch backdrop to')
            .appendField(new Blockly.FieldDropdown([
                ['white', 'white'], ['sky', 'sky'], ['space', 'space'],
                ['grass', 'grass'], ['underwater', 'underwater'], ['grid', 'grid']
            ]), 'BACKDROP');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF');
    }
};

Blockly.Blocks['looks_size'] = {
    init: function () { this.appendDummyInput().appendField('show size'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9966FF'); }
};

// ============================================
//  CATEGORY: SOUND
// ============================================

Blockly.Blocks['sound_play'] = {
    init: function () {
        this.appendDummyInput().appendField('play sound')
            .appendField(new Blockly.FieldDropdown([
                ['pop', 'pop'], ['beep', 'beep'], ['click', 'click'],
                ['ding', 'ding'], ['whoosh', 'whoosh'], ['error', 'error'],
                ['success', 'success'], ['coin', 'coin']
            ]), 'SOUND');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#D65CD6');
    }
};

Blockly.Blocks['sound_play_note'] = {
    init: function () {
        this.appendDummyInput().appendField('play note')
            .appendField(new Blockly.FieldDropdown([
                ['C4', '261.63'], ['D4', '293.66'], ['E4', '329.63'], ['F4', '349.23'],
                ['G4', '392.00'], ['A4', '440.00'], ['B4', '493.88'], ['C5', '523.25']
            ]), 'NOTE')
            .appendField('for').appendField(new Blockly.FieldNumber(0.5, 0.1, 10, 0.1), 'BEATS').appendField('beats');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#D65CD6');
    }
};

Blockly.Blocks['sound_set_volume'] = {
    init: function () {
        this.appendDummyInput().appendField('set volume to').appendField(new Blockly.FieldNumber(80, 0, 100), 'VOL').appendField('%');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#D65CD6');
    }
};

// ============================================
//  CATEGORY: PEN
// ============================================

Blockly.Blocks['pen_down'] = {
    init: function () { this.appendDummyInput().appendField('pen down'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#0fBD8C'); }
};
Blockly.Blocks['pen_up'] = {
    init: function () { this.appendDummyInput().appendField('pen up'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#0fBD8C'); }
};
Blockly.Blocks['pen_clear'] = {
    init: function () { this.appendDummyInput().appendField('erase all'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#0fBD8C'); }
};
Blockly.Blocks['pen_stamp'] = {
    init: function () { this.appendDummyInput().appendField('stamp'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#0fBD8C'); }
};

Blockly.Blocks['pen_set_color'] = {
    init: function () {
        this.appendDummyInput().appendField('set pen color')
            .appendField(new Blockly.FieldDropdown([
                ['blue', '#4361ee'], ['red', '#ef476f'], ['green', '#06d6a0'],
                ['yellow', '#ffd166'], ['purple', '#7209b7'], ['orange', '#ff6b35'],
                ['black', '#000000'], ['white', '#ffffff'], ['pink', '#f72585']
            ]), 'COLOR');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#0fBD8C');
    }
};

Blockly.Blocks['pen_set_size'] = {
    init: function () {
        this.appendDummyInput().appendField('set pen size to').appendField(new Blockly.FieldNumber(2, 1, 50), 'SIZE');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#0fBD8C');
    }
};

// ============================================
//  CATEGORY: SENSING
// ============================================

Blockly.Blocks['sensing_touching_edge'] = {
    init: function () { this.appendDummyInput().appendField('show touching edge?'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6'); }
};
Blockly.Blocks['sensing_mouse_x'] = {
    init: function () { this.appendDummyInput().appendField('show mouse x'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6'); }
};
Blockly.Blocks['sensing_mouse_y'] = {
    init: function () { this.appendDummyInput().appendField('show mouse y'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6'); }
};
Blockly.Blocks['sensing_mouse_down'] = {
    init: function () { this.appendDummyInput().appendField('show mouse down?'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6'); }
};

Blockly.Blocks['sensing_key_pressed'] = {
    init: function () {
        this.appendDummyInput().appendField('show key')
            .appendField(new Blockly.FieldDropdown([
                ['space', ' '], ['up arrow', 'ArrowUp'], ['down arrow', 'ArrowDown'],
                ['left arrow', 'ArrowLeft'], ['right arrow', 'ArrowRight'],
                ['a', 'a'], ['w', 'w'], ['s', 's'], ['d', 'd']
            ]), 'KEY').appendField('pressed?');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6');
    }
};

Blockly.Blocks['sensing_ask'] = {
    init: function () {
        this.appendDummyInput().appendField('ask').appendField(new Blockly.FieldTextInput("What's your name?"), 'QUESTION').appendField('and wait');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6');
    }
};

Blockly.Blocks['sensing_answer'] = {
    init: function () { this.appendDummyInput().appendField('show answer'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6'); }
};
Blockly.Blocks['sensing_timer'] = {
    init: function () { this.appendDummyInput().appendField('show timer'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6'); }
};
Blockly.Blocks['sensing_reset_timer'] = {
    init: function () { this.appendDummyInput().appendField('reset timer'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6'); }
};

Blockly.Blocks['sensing_distance_to'] = {
    init: function () {
        this.appendDummyInput().appendField('show distance to')
            .appendField(new Blockly.FieldDropdown([['mouse', 'mouse'], ['center', 'center']]), 'TARGET');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#5CB1D6');
    }
};

// ============================================
//  CATEGORY: AI BLOCKS
// ============================================

Blockly.Blocks['ai_ask'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z'/%3E%3C/svg%3E", 18, 18))
            .appendField('Ask AI');
        this.appendValueInput('QUESTION').setCheck('String').appendField('question:');
        this.setOutput(true, 'String'); this.setColour('#7209b7');
    }
};

Blockly.Blocks['ai_ask_simple'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z'/%3E%3C/svg%3E", 18, 18))
            .appendField('Ask AI:').appendField(new Blockly.FieldTextInput('What is machine learning?'), 'QUESTION');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#7209b7');
    }
};

Blockly.Blocks['ai_summarize'] = {
    init: function () {
        this.appendDummyInput().appendField('AI Summarize');
        this.appendValueInput('TEXT').setCheck('String').appendField('text:');
        this.setOutput(true, 'String'); this.setColour('#7209b7');
    }
};

Blockly.Blocks['ai_translate'] = {
    init: function () {
        this.appendDummyInput().appendField('AI Translate to')
            .appendField(new Blockly.FieldDropdown([
                ['Hindi', 'Hindi'], ['Spanish', 'Spanish'], ['French', 'French'],
                ['German', 'German'], ['Japanese', 'Japanese'], ['Chinese', 'Chinese'], ['Arabic', 'Arabic']
            ]), 'LANG');
        this.appendValueInput('TEXT').setCheck('String').appendField('text:');
        this.setOutput(true, 'String'); this.setColour('#7209b7');
    }
};

// ============================================
//  CATEGORY: LEARNING
// ============================================

Blockly.Blocks['learn_generate_quiz'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9h-4v4h-2v-4H9V9h4V5h2v4h4v2z'/%3E%3C/svg%3E", 18, 18))
            .appendField('Generate Quiz');
        this.appendDummyInput().appendField('topic:').appendField(new Blockly.FieldTextInput('Solar System'), 'TOPIC');
        this.appendDummyInput().appendField('questions:').appendField(new Blockly.FieldNumber(3, 1, 10), 'COUNT');
        this.appendDummyInput().appendField('difficulty:')
            .appendField(new Blockly.FieldDropdown([['Easy', 'easy'], ['Medium', 'medium'], ['Hard', 'hard']]), 'DIFFICULTY');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#f72585');
    }
};

Blockly.Blocks['learn_flashcard'] = {
    init: function () {
        this.appendDummyInput().appendField('Create Flashcard');
        this.appendDummyInput().appendField('front:').appendField(new Blockly.FieldTextInput('Question'), 'FRONT');
        this.appendDummyInput().appendField('back:').appendField(new Blockly.FieldTextInput('Answer'), 'BACK');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#f72585');
    }
};

Blockly.Blocks['learn_explain_topic'] = {
    init: function () {
        this.appendDummyInput().appendField('Explain topic:').appendField(new Blockly.FieldTextInput('Photosynthesis'), 'TOPIC');
        this.appendDummyInput().appendField('level:')
            .appendField(new Blockly.FieldDropdown([['Beginner', 'beginner'], ['Intermediate', 'intermediate'], ['Advanced', 'advanced']]), 'LEVEL');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#f72585');
    }
};

Blockly.Blocks['learn_define_word'] = {
    init: function () {
        this.appendDummyInput().appendField('Define word:').appendField(new Blockly.FieldTextInput('algorithm'), 'WORD');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#f72585');
    }
};

// ============================================
//  CATEGORY: ACTIONS
// ============================================

Blockly.Blocks['action_show_message'] = {
    init: function () {
        this.appendValueInput('MSG').setCheck(null).appendField('Show message');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4361ee');
    }
};

Blockly.Blocks['action_show_message_simple'] = {
    init: function () {
        this.appendDummyInput().appendField('Show message:').appendField(new Blockly.FieldTextInput('Hello, NeuraEdu!'), 'MSG');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4361ee');
    }
};

Blockly.Blocks['action_alert'] = {
    init: function () {
        this.appendValueInput('MSG').setCheck(null).appendField('Alert popup');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4361ee');
    }
};

Blockly.Blocks['action_prompt'] = {
    init: function () {
        this.appendDummyInput().appendField('Ask user:').appendField(new Blockly.FieldTextInput('What is your name?'), 'PROMPT_TEXT');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4361ee');
        this.setTooltip('Ask user for input, sprite shows the answer');
    }
};

Blockly.Blocks['action_wait'] = {
    init: function () {
        this.appendDummyInput().appendField('Wait').appendField(new Blockly.FieldNumber(1, 0.1, 30, 0.1), 'SECONDS').appendField('seconds');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4361ee');
    }
};

Blockly.Blocks['action_set_variable'] = {
    init: function () {
        this.appendValueInput('VALUE').setCheck(null).appendField('Set').appendField(new Blockly.FieldTextInput('myVar'), 'VAR_NAME').appendField('=');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4361ee');
    }
};

Blockly.Blocks['action_get_variable'] = {
    init: function () {
        this.appendDummyInput().appendField('Show variable').appendField(new Blockly.FieldTextInput('myVar'), 'VAR_NAME');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#4361ee');
        this.setTooltip('Show variable value on sprite');
    }
};

// ============================================
//  CATEGORY: LOGIC
// ============================================

Blockly.Blocks['logic_if_else'] = {
    init: function () {
        this.appendValueInput('CONDITION').setCheck('Boolean').appendField('If');
        this.appendStatementInput('DO').appendField('then');
        this.appendStatementInput('ELSE').appendField('else');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ffd166');
    }
};

Blockly.Blocks['logic_compare'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('is')
            .appendField(new Blockly.FieldNumber(10), 'A')
            .appendField(new Blockly.FieldDropdown([
                ['=', 'EQ'], ['\u2260', 'NEQ'], ['>', 'GT'], ['<', 'LT'], ['\u2265', 'GTE'], ['\u2264', 'LTE']
            ]), 'OP')
            .appendField(new Blockly.FieldNumber(5), 'B')
            .appendField('?');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ffd166');
        this.setTooltip('Compare two numbers, sprite says true/false');
    }
};

Blockly.Blocks['logic_boolean'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('show')
            .appendField(new Blockly.FieldDropdown([['true', 'TRUE'], ['false', 'FALSE']]), 'BOOL');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ffd166');
        this.setTooltip('Sprite says true or false');
    }
};

Blockly.Blocks['logic_not'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('not')
            .appendField(new Blockly.FieldDropdown([['true', 'TRUE'], ['false', 'FALSE']]), 'BOOL');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ffd166');
        this.setTooltip('Flip true/false, sprite shows result');
    }
};

Blockly.Blocks['logic_and_or'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldDropdown([['true', 'TRUE'], ['false', 'FALSE']]), 'A')
            .appendField(new Blockly.FieldDropdown([['and', 'AND'], ['or', 'OR']]), 'OP')
            .appendField(new Blockly.FieldDropdown([['true', 'TRUE'], ['false', 'FALSE']]), 'B');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ffd166');
        this.setTooltip('Combine true/false values, sprite shows result');
    }
};

// ============================================
//  CATEGORY: LOOPS
// ============================================

Blockly.Blocks['loop_repeat'] = {
    init: function () {
        this.appendDummyInput().appendField('Repeat').appendField(new Blockly.FieldNumber(10, 1, 10000), 'TIMES').appendField('times');
        this.appendStatementInput('DO').appendField('do');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ff6b6b');
    }
};

Blockly.Blocks['loop_forever'] = {
    init: function () {
        this.appendDummyInput().appendField('forever');
        this.appendStatementInput('DO').appendField('do');
        this.setPreviousStatement(true, null); this.setColour('#ff6b6b');
        this.setTooltip('Repeat forever (click Stop to end)');
    }
};

Blockly.Blocks['loop_while'] = {
    init: function () {
        this.appendValueInput('CONDITION').setCheck('Boolean').appendField('While');
        this.appendStatementInput('DO').appendField('do');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ff6b6b');
    }
};

Blockly.Blocks['loop_for_each'] = {
    init: function () {
        this.appendValueInput('LIST').setCheck('Array').appendField('For each item in');
        this.appendStatementInput('DO').appendField('do');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ff6b6b');
    }
};

Blockly.Blocks['loop_count_variable'] = {
    init: function () { this.appendDummyInput().appendField('show current count'); this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#ff6b6b'); }
};

// ============================================
//  CATEGORY: TEXT
// ============================================

// All text blocks: statement blocks with inline inputs, sprite shows result

Blockly.Blocks['text_value'] = {
    init: function () {
        this.appendDummyInput().appendField('show text').appendField(new Blockly.FieldTextInput('hello world'), 'TEXT');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#48bfe3');
        this.setTooltip('Sprite says this text for 5 seconds');
    }
};

Blockly.Blocks['text_join'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('join')
            .appendField(new Blockly.FieldTextInput('hello'), 'A')
            .appendField('+')
            .appendField(new Blockly.FieldTextInput(' world'), 'B');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#48bfe3');
        this.setTooltip('Join two texts, sprite shows result');
    }
};

Blockly.Blocks['text_length'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('length of')
            .appendField(new Blockly.FieldTextInput('hello'), 'TEXT');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#48bfe3');
        this.setTooltip('Count characters, sprite says the number');
    }
};

Blockly.Blocks['text_uppercase'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('uppercase')
            .appendField(new Blockly.FieldTextInput('hello world'), 'TEXT');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#48bfe3');
        this.setTooltip('Convert to uppercase, sprite shows result');
    }
};

Blockly.Blocks['text_lowercase'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('lowercase')
            .appendField(new Blockly.FieldTextInput('HELLO WORLD'), 'TEXT');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#48bfe3');
        this.setTooltip('Convert to lowercase, sprite shows result');
    }
};

Blockly.Blocks['text_reverse'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('reverse text')
            .appendField(new Blockly.FieldTextInput('hello'), 'TEXT');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#48bfe3');
        this.setTooltip('Reverse the text, sprite shows result');
    }
};

Blockly.Blocks['text_contains'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('does')
            .appendField(new Blockly.FieldTextInput('hello world'), 'TEXT')
            .appendField('contain')
            .appendField(new Blockly.FieldTextInput('world'), 'SEARCH');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#48bfe3');
        this.setTooltip('Check if text contains a word, sprite says yes/no');
    }
};

// ============================================
//  CATEGORY: MATH
// ============================================

// All math blocks are statement blocks — every one shows result on sprite for 5 sec

Blockly.Blocks['math_number'] = {
    init: function () {
        this.appendDummyInput().appendField('show number').appendField(new Blockly.FieldNumber(42), 'NUM');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#80b918');
        this.setTooltip('Sprite says this number for 5 seconds');
    }
};

Blockly.Blocks['math_calc'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldNumber(10), 'A')
            .appendField(new Blockly.FieldDropdown([
                ['+', '+'], ['-', '-'], ['\u00D7', '*'], ['\u00F7', '/'], ['mod', '%'], ['^', '**']
            ]), 'OP')
            .appendField(new Blockly.FieldNumber(5), 'B')
            .appendField('=');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#80b918');
        this.setTooltip('Calculate and sprite says the answer for 5 seconds');
    }
};

Blockly.Blocks['math_random'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('random number')
            .appendField(new Blockly.FieldNumber(1), 'MIN')
            .appendField('to')
            .appendField(new Blockly.FieldNumber(100), 'MAX');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#80b918');
        this.setTooltip('Generate random number, sprite says it for 5 seconds');
    }
};

Blockly.Blocks['math_round'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldDropdown([['round', 'round'], ['floor', 'floor'], ['ceil', 'ceil']]), 'OP')
            .appendField(new Blockly.FieldNumber(3.7), 'NUM');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#80b918');
        this.setTooltip('Round a number, sprite says the result for 5 seconds');
    }
};

Blockly.Blocks['math_abs'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('abs')
            .appendField(new Blockly.FieldNumber(-5), 'NUM');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#80b918');
        this.setTooltip('Absolute value, sprite says the result for 5 seconds');
    }
};

Blockly.Blocks['math_print'] = {
    init: function () {
        this.appendDummyInput()
            .appendField(new Blockly.FieldImage("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white'%3E%3Cpath d='M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z'/%3E%3C/svg%3E", 18, 18))
            .appendField('Calculate')
            .appendField(new Blockly.FieldNumber(10), 'VALUE');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#80b918');
        this.setTooltip('Show the number on sprite for 5 seconds');
    }
};

// Quick math: type an expression directly
Blockly.Blocks['math_quick'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('Solve:')
            .appendField(new Blockly.FieldTextInput('5 + 3 * 2'), 'EXPR');
        this.setPreviousStatement(true, null);
        this.setNextStatement(true, null);
        this.setColour('#80b918');
        this.setTooltip('Type a math expression and see the result');
    }
};

// ============================================
//  CATEGORY: LISTS
// ============================================

// All list blocks are statement blocks — sprite shows the result

Blockly.Blocks['list_create'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('show list')
            .appendField(new Blockly.FieldTextInput('apple, banana, cherry'), 'ITEMS');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Create a list and sprite shows all items');
    }
};

Blockly.Blocks['list_length'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('count items in')
            .appendField(new Blockly.FieldTextInput('apple, banana, cherry'), 'ITEMS');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Count items in list, sprite says the count');
    }
};

Blockly.Blocks['list_get_item'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('get item')
            .appendField(new Blockly.FieldNumber(1, 1, 100), 'INDEX')
            .appendField('from')
            .appendField(new Blockly.FieldTextInput('apple, banana, cherry'), 'ITEMS');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Get item by position, sprite says it');
    }
};

Blockly.Blocks['list_add_item'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('add')
            .appendField(new Blockly.FieldTextInput('mango'), 'ITEM')
            .appendField('to')
            .appendField(new Blockly.FieldTextInput('apple, banana'), 'ITEMS');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Add item to list, sprite shows updated list');
    }
};

Blockly.Blocks['list_contains'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('does')
            .appendField(new Blockly.FieldTextInput('apple, banana, cherry'), 'ITEMS')
            .appendField('contain')
            .appendField(new Blockly.FieldTextInput('banana'), 'SEARCH');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Check if item exists in list, sprite says yes/no');
    }
};

Blockly.Blocks['list_reverse'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('reverse')
            .appendField(new Blockly.FieldTextInput('apple, banana, cherry'), 'ITEMS');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Reverse the list, sprite shows result');
    }
};

Blockly.Blocks['list_sort'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('sort')
            .appendField(new Blockly.FieldTextInput('cherry, apple, banana'), 'ITEMS');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Sort the list alphabetically, sprite shows result');
    }
};

Blockly.Blocks['list_join'] = {
    init: function () {
        this.appendDummyInput()
            .appendField('join')
            .appendField(new Blockly.FieldTextInput('apple, banana, cherry'), 'ITEMS')
            .appendField('with')
            .appendField(new Blockly.FieldTextInput(' + '), 'SEP');
        this.setPreviousStatement(true, null); this.setNextStatement(true, null); this.setColour('#9b5de5');
        this.setTooltip('Join list items with a separator, sprite shows result');
    }
};

console.log('[VLL] Block definitions registered');

}; // end registerVLLBlocks


// ============================================
//  TOOLBOX (JSON format - more reliable)
// ============================================

window.VLL_TOOLBOX_JSON = {
    kind: 'categoryToolbox',
    contents: [
        { kind: 'category', name: 'Events', colour: '#06d6a0', contents: [
            { kind: 'label', text: 'Start your program' },
            { kind: 'block', type: 'event_flag' },
            { kind: 'block', type: 'event_start' },
            { kind: 'block', type: 'event_on_key' },
            { kind: 'block', type: 'event_sprite_clicked' }
        ]},
        { kind: 'category', name: 'Motion', colour: '#4C97FF', contents: [
            { kind: 'label', text: 'Move your sprite' },
            { kind: 'block', type: 'motion_move', fields: { STEPS: 10 } },
            { kind: 'block', type: 'motion_turn_right', fields: { DEGREES: 15 } },
            { kind: 'block', type: 'motion_turn_left', fields: { DEGREES: 15 } },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'motion_goto_xy' },
            { kind: 'block', type: 'motion_goto_random' },
            { kind: 'block', type: 'motion_glide', fields: { SECS: 1 } },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'motion_point_dir', fields: { DIR: 90 } },
            { kind: 'block', type: 'motion_change_x', fields: { DX: 10 } },
            { kind: 'block', type: 'motion_change_y', fields: { DY: 10 } },
            { kind: 'block', type: 'motion_set_x' },
            { kind: 'block', type: 'motion_set_y' },
            { kind: 'block', type: 'motion_bounce_edge' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'motion_x_pos' },
            { kind: 'block', type: 'motion_y_pos' },
            { kind: 'block', type: 'motion_direction' }
        ]},
        { kind: 'category', name: 'Looks', colour: '#9966FF', contents: [
            { kind: 'label', text: 'Appearance' },
            { kind: 'block', type: 'looks_say_timed', fields: { MSG: 'Hello!', SECS: 2 } },
            { kind: 'block', type: 'looks_say', fields: { MSG: 'Hello!' } },
            { kind: 'block', type: 'looks_think', fields: { MSG: 'Hmm...' } },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'looks_set_costume' },
            { kind: 'block', type: 'looks_next_costume' },
            { kind: 'block', type: 'looks_set_backdrop' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'looks_change_size', fields: { CHANGE: 10 } },
            { kind: 'block', type: 'looks_set_size', fields: { SIZE: 100 } },
            { kind: 'block', type: 'looks_set_color' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'looks_show' },
            { kind: 'block', type: 'looks_hide' },
            { kind: 'block', type: 'looks_size' }
        ]},
        { kind: 'category', name: 'Sound', colour: '#D65CD6', contents: [
            { kind: 'block', type: 'sound_play' },
            { kind: 'block', type: 'sound_play_note' },
            { kind: 'block', type: 'sound_set_volume' }
        ]},
        { kind: 'category', name: 'Pen', colour: '#0fBD8C', contents: [
            { kind: 'block', type: 'pen_clear' },
            { kind: 'block', type: 'pen_stamp' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'pen_down' },
            { kind: 'block', type: 'pen_up' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'pen_set_color' },
            { kind: 'block', type: 'pen_set_size', fields: { SIZE: 2 } }
        ]},
        { kind: 'category', name: 'Sensing', colour: '#5CB1D6', contents: [
            { kind: 'block', type: 'sensing_touching_edge' },
            { kind: 'block', type: 'sensing_distance_to' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'sensing_ask' },
            { kind: 'block', type: 'sensing_answer' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'sensing_key_pressed' },
            { kind: 'block', type: 'sensing_mouse_down' },
            { kind: 'block', type: 'sensing_mouse_x' },
            { kind: 'block', type: 'sensing_mouse_y' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'sensing_timer' },
            { kind: 'block', type: 'sensing_reset_timer' }
        ]},
        // { kind: 'sep', gap: 36 },
        // { kind: 'category', name: 'AI', colour: '#7209b7', contents: [
        //     { kind: 'label', text: 'Ask AI anything' },
        //     { kind: 'block', type: 'ai_ask_simple', fields: { QUESTION: 'What is machine learning?' } },
        //     { kind: 'block', type: 'ai_ask' },
        //     { kind: 'block', type: 'ai_summarize' },
        //     { kind: 'block', type: 'ai_translate' }
        // ]},
        // { kind: 'category', name: 'Learning', colour: '#f72585', contents: [
        //     { kind: 'block', type: 'learn_generate_quiz' },
        //     { kind: 'block', type: 'learn_flashcard' },
        //     { kind: 'block', type: 'learn_explain_topic' },
        //     { kind: 'block', type: 'learn_define_word' }
        // ]},
        { kind: 'sep', gap: 36 },
        { kind: 'category', name: 'Actions', colour: '#4361ee', contents: [
            { kind: 'block', type: 'action_show_message_simple', fields: { MSG: 'Hello, NeuraEdu!' } },
            // { kind: 'block', type: 'action_show_message' },
            // { kind: 'block', type: 'action_alert' },
            { kind: 'block', type: 'action_prompt' },
            { kind: 'block', type: 'action_wait', fields: { SECONDS: 1 } },
            // { kind: 'block', type: 'action_set_variable' },
            { kind: 'block', type: 'action_get_variable' }
        ]},
        { kind: 'category', name: 'Logic', colour: '#ffd166', contents: [
            // { kind: 'block', type: 'logic_if_else' },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'logic_compare', fields: { A: 10, OP: 'GT', B: 5 } },
            { kind: 'block', type: 'logic_boolean' },
            { kind: 'block', type: 'logic_not' },
            { kind: 'block', type: 'logic_and_or' }
        ]},
        { kind: 'category', name: 'Loops', colour: '#ff6b6b', contents: [
            { kind: 'block', type: 'loop_forever' },
            { kind: 'block', type: 'loop_repeat', fields: { TIMES: 10 } },
            // { kind: 'block', type: 'loop_while' },
            // { kind: 'block', type: 'loop_for_each' },
            { kind: 'block', type: 'loop_count_variable' }
        ]},
        { kind: 'category', name: 'Text', colour: '#48bfe3', contents: [
            { kind: 'block', type: 'text_value', fields: { TEXT: 'hello world' } },
            { kind: 'block', type: 'text_join', fields: { A: 'hello', B: ' world' } },
            { kind: 'block', type: 'text_length', fields: { TEXT: 'hello' } },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'text_uppercase', fields: { TEXT: 'hello world' } },
            { kind: 'block', type: 'text_lowercase', fields: { TEXT: 'HELLO WORLD' } },
            { kind: 'block', type: 'text_reverse', fields: { TEXT: 'hello' } },
            { kind: 'block', type: 'text_contains', fields: { TEXT: 'hello world', SEARCH: 'world' } }
        ]},
        { kind: 'category', name: 'Math', colour: '#80b918', contents: [
            { kind: 'block', type: 'math_calc', fields: { A: 10, OP: '+', B: 5 } },
            { kind: 'block', type: 'math_number', fields: { NUM: 42 } },
            { kind: 'block', type: 'math_random', fields: { MIN: 1, MAX: 100 } },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'math_round', fields: { OP: 'round', NUM: 3.7 } },
            { kind: 'block', type: 'math_abs', fields: { NUM: -5 } },
            { kind: 'block', type: 'math_print', fields: { VALUE: 10 } },
            { kind: 'block', type: 'math_quick', fields: { EXPR: '5 + 3 * 2' } }
        ]},
        { kind: 'category', name: 'Lists', colour: '#9b5de5', contents: [
            { kind: 'block', type: 'list_create', fields: { ITEMS: 'apple, banana, cherry' } },
            { kind: 'block', type: 'list_length', fields: { ITEMS: 'apple, banana, cherry' } },
            { kind: 'block', type: 'list_get_item', fields: { INDEX: 2, ITEMS: 'apple, banana, cherry' } },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'list_add_item', fields: { ITEM: 'mango', ITEMS: 'apple, banana' } },
            { kind: 'block', type: 'list_contains', fields: { ITEMS: 'apple, banana, cherry', SEARCH: 'banana' } },
            { kind: 'sep', gap: 24 },
            { kind: 'block', type: 'list_reverse', fields: { ITEMS: 'apple, banana, cherry' } },
            { kind: 'block', type: 'list_sort', fields: { ITEMS: 'cherry, apple, banana' } },
            { kind: 'block', type: 'list_join', fields: { ITEMS: 'apple, banana, cherry', SEP: ' + ' } }
        ]}
    ]
};

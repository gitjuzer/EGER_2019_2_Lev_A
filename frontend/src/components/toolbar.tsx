import React from "react";
import Select from '@material-ui/core/Select';
import InputLabel from '@material-ui/core/InputLabel';
import MenuItem from '@material-ui/core/MenuItem';
import FormControl from '@material-ui/core/FormControl';
import Button from '@material-ui/core/Button';
import {makeStyles} from '@material-ui/core/styles';

const useStyles = makeStyles({
    root: {
        fontFamily: "\"Roboto\", \"Helvetica\", \"Arial\", sans-serif",
    },
    formControl: {
        margin: 10,
        minWidth: 200,
    },
    wrapper: {
        marginBottom: 10
    }
});


const MemoryToolbar = () => {
    const classes = useStyles();
    const [gameMode, setGameMode] = React.useState('');
    const [gameLevel, setGameLevel] = React.useState('');

    const handleModeChange = (event: React.ChangeEvent<{ value: unknown }>) => {
        setGameMode(event.target.value as string);
    };

    const handleLevelChange = (event: React.ChangeEvent<{ value: unknown }>) => {
        setGameLevel(event.target.value as string);
    };

    const handleClick = () => {
        console.log(gameMode, gameLevel);
    };

    return <div className={classes.root}>
        <h3>Válassz játékmódot!</h3>
        <div className={classes.wrapper}>
            <FormControl className={classes.formControl}>
                <InputLabel id="select-mode">Játékmód</InputLabel>
                <Select
                    labelId="select-mode"
                    value={gameMode}
                    onChange={handleModeChange}
                >
                    <MenuItem value={'pic'}>Csak képek</MenuItem>
                    <MenuItem value={'text'}>Csak szöveg</MenuItem>
                    <MenuItem value={'picandtext'}>Képek és szöveg párosítás</MenuItem>
                </Select>
            </FormControl>

            <FormControl className={classes.formControl}>
                <InputLabel id="select-level">Nehézségi szint</InputLabel>
                <Select
                    labelId="select-level"
                    value={gameLevel}
                    onChange={handleLevelChange}
                >
                    <MenuItem value={5}>Könnyű</MenuItem>
                    <MenuItem value={7}>Közepes</MenuItem>
                    <MenuItem value={9}>Nehéz</MenuItem>
                </Select>
            </FormControl>
        </div>

        <Button variant="outlined"
                onClick={handleClick}
                // disabled={!isEnabled}
        >
            Játék
        </Button>
    </div>
}

export default MemoryToolbar;
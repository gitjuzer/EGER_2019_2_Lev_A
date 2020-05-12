import React from "react";
import MemoryHeader from "./header";
import MemoryToolbar from "./toolbar";
import Board from "./board";
import Paper from '@material-ui/core/Paper';

class MemoryGame extends React.Component {
    state= {
        selectedMode: '',
        selectedLevel: '',
        errorMessage: ''
    }

    handleStartGame = (gameMode: string, gameLevel: string): void => {
        if(gameMode === '' || gameLevel === '') {
            this.setState({errorMessage: 'Válassz játékmódot és nehézségi szintet!'})
        }

        this.setState({
            selectedMode: gameMode,
            selectedLevel: gameLevel,
            errorMessage: ''
        })
    };

    render() {
        return (
        <Paper>
            <MemoryHeader/>
            <MemoryToolbar onClick={this.handleStartGame} />

            {/*{this.state.errorMessage !== '' && <h3>{this.state.errorMessage}</h3>}*/}

            <Board numberOfCards={parseInt(this.state.selectedLevel)}/>
        </Paper>
        )
    }
}

export default MemoryGame;

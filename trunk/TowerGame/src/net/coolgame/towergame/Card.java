package net.coolgame.towergame;

import com.badlogic.gdx.graphics.g2d.Sprite;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;

public class Card extends Sprite
{
	private int _cost = 0;
	public int GetCost() {return _cost;}
	private int _rounds = 0;
	public int GetRounds() {return _rounds;}
	private String _title = "";
	public String GetTitle(){return _title;}
	private String _description = "";
	public String GetDescription(){return _description;}
	
	public Card(int cost, int rounds, String title, String description)
	{
		_cost = cost;
		_rounds = rounds;
		_title = title;
		_description = description;
	}
	
	@Override
	public void draw(SpriteBatch spriteBatch) 
	{
		
		super.draw(spriteBatch);
		
	}
}

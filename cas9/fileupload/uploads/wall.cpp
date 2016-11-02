#include <bits/stdc++.h>
const int inf = 1<<30;

class element
{
public:
    int lowerBound, upperBound;
    element(int _lowerBound, int _upperBound)
    {
        lowerBound = _lowerBound;
        upperBound = _upperBound;
    }
    element() {};
};
element undefined = element(inf, -inf);
class node
{
public:
    node *leftChild, *rightChild;
    int begin, end;
    element value;
    bool doPush;
    node (int _begin, int _end)
    {
        begin = _begin;
        end = _end;
        doPush = false;
        if(begin == end)
        {
            value = getValueOfLeaf(begin);
        }
        else
        {
            int middle = (begin+end)/2;
            leftChild = new node(begin, middle);
            rightChild = new node(middle+1, end);
            value = merge(leftChild->value, rightChild->value);
        }
    }
    element merge (element A, element B)
    {
        return element(std::min(A.lowerBound, B.lowerBound), std::max(A.upperBound, B.upperBound)); // returns the maximum value from A and B

    }
    element getValueOfLeaf(int index)
    {
        return element(0, 0);
    }
    void update(int updateBegin, int updateEnd, element newValue)
    {
        if(updateBegin <= begin && end <= updateEnd)
        {
            setLazyMarker(newValue);
        }
        else if(updateEnd >= begin && end >= updateBegin)
        {
            pushLazyMarker();
            leftChild->update(updateBegin, updateEnd, newValue);
            rightChild->update(updateBegin, updateEnd, newValue);
            value = merge(leftChild->value, rightChild->value);
        }
        // cout << "the update interval is outside" << endl;
    }
    void setLazyMarker(element newValue)
    {
        value = updateValue(value, newValue);
        if(begin!=end)
        {
            doPush = true; // current node is not a leaf, since the begin and end indexes differ
        }
    }
    void pushLazyMarker()
    {
        if(doPush)
        {
            leftChild->setLazyMarker(value);
            rightChild->setLazyMarker(value);
            doPush = !doPush;
        }
    }
    element updateValue(element oldValue, element newValue)
    {
        if(oldValue.upperBound < newValue.lowerBound)
        {
            return element(newValue.lowerBound, newValue.lowerBound);
        }
        if(oldValue.lowerBound > newValue.upperBound)
        {
            return element(newValue.upperBound, newValue.upperBound);
        }
        return element(std::max(oldValue.lowerBound, newValue.lowerBound), std::min(oldValue.upperBound, newValue.upperBound));
    }
    element query(int queryBegin, int queryEnd)
    {
        pushLazyMarker();
        if(queryBegin>end || queryEnd<begin)
        {
            return undefined; // out of query boundaries, not needed
        }
        else if(begin >= queryBegin && end <= queryEnd)
        {
            return value; // in query boundaries, already calculated
        }
        else
        {
            return merge(leftChild->query(queryBegin, queryEnd), rightChild->query(queryBegin, queryEnd)); // partially in boundaries
        }
    }

};
node* root;
void buildWall(int n, int m, int op[], int left[], int right[], int height[], int finalHeight[]) {

//build the tree

    root = new node(0, n-1);

    for(int i=0; i < m; i++)

    {

//change the format of the update

        element range;

        if(op[i]==1)

        {

//the update is type B

            range = element(height[i], inf);

        }

        else

        {

//the update is type A

            range = element(-inf, height[i]);

        }

//update the tree

        root->
        update(left[i], right[i], range);

    }

//get the final state of the array

    for(int i=0; i < n; i++)

    {

        finalHeight[i] = root->query(i, i).lowerBound;
	std::cout << finalHeight[i] << " ";
    }
    std::cout << std::endl;

}
int op[(int)5e5+1], _left[(int)5e5+1], _right[(int)5e5+1], height[(int)5e5+1], finalHeight[(int)2e6+1];
int main()
{
    int n, m; std::cin >> n >> m;
    for(int i = 0; i < m; i++) {
        std::cin >> *(op+i) >> *(_left+i) >> *(_right+i) >> *(height+i);
    }
    
    buildWall(n, m, op, _left, _right, height, finalHeight);
    
    return 0;
}

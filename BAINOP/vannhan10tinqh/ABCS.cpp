#include<bits/stdc++.h>
using namespace std;
int X[7];
int main()
{
    freopen("ABCS.INP","r",stdin);
    freopen("ABCS.OUT","w",stdout);
    for(short i=0;i<7;i++)
        cin>>X[i];
    sort(X,X+7);
    short i=0;
    short j=i+1;
    short k=j+1;
    while((X[i]+X[j]+X[k]!=X[6])&&(i<=4))
    {
        if(j==6)
        {
            i++;
            j=i+1;
        }
        else if(k==6)
        {
            j++;
            k=j+1;
        } else k++;
    }
    cout<<X[i]<<' '<<X[j]<<' '<<X[k]<<' '<<endl;
}
